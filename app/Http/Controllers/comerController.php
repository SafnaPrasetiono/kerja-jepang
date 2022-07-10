<?php

namespace App\Http\Controllers;

use App\Models\comers;
use App\Models\comers_address;
use App\Models\comers_documents;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class comerController extends Controller
{
    // show index
    public function index()
    {
        return view('pages.comer.index');
    }
    
    public function daftar()
    {
        return view('pages.comer.registery');
    }
    
    public function register(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            "username" => 'required',
            "email" => 'required',
            "born" => 'required',
            "gender" => 'required',
            "phone" => 'required',

            "province_id" => 'required',
            "city_id" => 'required',
            "district_id" => 'required',
            "village_id" => 'required',
            "postal_code" => 'required',
            "country" => 'required',
            "address" => 'required',

            'ktp'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10512',
            'kk'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10512',
            'akte'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10512',
            'photo'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10512',
            // 'imagesMultiple.*'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'username.required'     => 'Oops, Username tidak boleh kosong',
            'email.required'        => 'Oops, email tidak boleh kosong',
            'born.required'         => 'Oops, Tanggal lahir tidak boleh kosong',
            'gender.required'       => 'Oops, Jenis kelamin tidak boleh kosong',
            'phone.required'        => 'Oops, Nomor telepon tidak boleh kosong',
            
            'province_id.required'     => 'Oops, Province tidak boleh kosong',
            'city_id.required'         => 'Oops, Kota tidak boleh kosong',
            'district_id.required'     => 'Oops, District tidak boleh kosong',
            'village_id.required'      => 'Oops, Kelurahan tidak boleh kosong',
            'postal_code.required'  => 'Oops, Postal_code tidak boleh kosong',
            'country.required'      => 'Oops, Country tidak boleh kosong',
            'address.required'      => 'Oops, Address tidak boleh kosong',

            'ktp.required'       => 'Oops, Ktp belum diupload',
            'ktp.image'          => 'Oops, File yang diupload bukan gambar',
            'ktp.mimes'          => 'Oops, Format file gambar tidak didukung',
            'ktp.max'            => 'Oops, Ukuran file upload telalu besar',

            'kk.required'       => 'Oops, Kartu keluarga belum diupload',
            'kk.image'          => 'Oops, File yang diupload bukan gambar',
            'kk.mimes'          => 'Oops, Format file gambar tidak didukung',
            'kk.max'            => 'Oops, Ukuran file upload telalu besar',

            'akte.required'       => 'Oops, Akte belum diupload',
            'akte.image'          => 'Oops, File yang diupload bukan gambar',
            'akte.mimes'          => 'Oops, Format file gambar tidak didukung',
            'akte.max'            => 'Oops, Ukuran file upload telalu besar',

            'photo.required'       => 'Oops, Photo belum diupload',
            'photo.image'          => 'Oops, File yang diupload bukan gambar',
            'photo.mimes'          => 'Oops, Format file gambar tidak didukung',
            'photo.max'            => 'Oops, Ukuran file upload telalu besar',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            $provinces = Province::find($request->province_id);
            $cities = Regency::find($request->city_id);
            $districts = District::find($request->district_id);
            $villages = Village::find($request->village_id);
            //code...
            try {
                $comer = new comers();
                $comer->username = $request->username;
                $comer->email = $request->email;
                $comer->born = $request->born;
                $comer->gender = $request->gender;
                $comer->phone = $request->phone;
                $comer->save();
    
                $address = new comers_address();
                $address->country = $request->country;
                $address->province = $provinces->name;
                $address->city = $cities->name;
                $address->district = $districts->name;
                $address->village = $villages->name;
                $address->postal_code = $request->postal_code;
                $address->address = $request->address;
                $address->comers_id = $comer->id_comers;
                $address->id_province = $provinces->id;
                $address->id_regency = $cities->id;
                $address->id_district = $districts->id;
                $address->id_village = $villages->id;
                $address->save();
    
                $date_images = date('YmdHis');
                $imageKtp = $request->ktp;
                $nameKtp = "KTP-" . $comer->id_comers . $date_images . "." .  $imageKtp->getClientOriginalExtension();
                $imageKK = $request->kk;
                $nameKK = "KK-" . $comer->id_comers . $date_images . "." .  $imageKK->getClientOriginalExtension();
                $imageAkte = $request->akte;
                $nameAkte = "AKTE-" . $comer->id_comers . $date_images . "." .  $imageAkte->getClientOriginalExtension();
                $imagePhoto = $request->photo;
                $namePhoto = "PHOTO-" . $comer->id_comers . $date_images . "." .  $imagePhoto->getClientOriginalExtension();
    
                $document = new comers_documents();
                $document->ktp = $nameKtp;
                $document->kk = $nameKK;
                $document->akte = $nameAkte;
                $document->photo = $namePhoto;
                $document->comers_id = $comer->id_comers;
                $document->save();
    
                $imageKtp->move(public_path() . "/images/comer/", $nameKtp);
                $imageKK->move(public_path() . "/images/comer/", $nameKK);
                $imageAkte->move(public_path() . "/images/comer/", $nameAkte);
                $imagePhoto->move(public_path() . "/images/comer/", $namePhoto);

                return redirect()->route('index.comer.register')->with('success', 'Pendaftaran kamu berhasil tunggu validasi dari pihak kami.');
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->route('index.comer.register')->with('error', 'Oops, maaf database desang sibuk, ulangi nanti!');
            }
        }
    }
}
