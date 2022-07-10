<?php

namespace App\Http\Controllers\admin\working;

use App\Http\Controllers\Controller;
use App\Models\loker;
use App\Models\training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class magangAdmin extends Controller
{
    // show training pages
    public function index()
    {
        return view('admin.working.magang.data');
    }
    public function create()
    {
        return view('admin.working.magang.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'locations'  => 'required',
            'description'      => 'required',
            'content'      => 'required',
            'date_start'      => 'required',
            'date_end'      => 'required',
            'images'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title.required'        => 'Please input field title jobs',
            'locations.required'  => 'Please input locations job',
            'description.required'      => 'Please input description job',
            'content.required'      => 'Please input content job',
            'date_start.required'      => 'Please input date post job',
            'date_end.required'      => 'Please input end date post job',
            'images.required'       => 'Please upload images',
            'images.image'          => 'File is not images',
            'images.mimes'          => 'File must be images',
            'images.max'            => 'File images oversized',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // slug from title
            $slug = Str::slug($request->title);
            // images 
            $resorce = $request->images;
            $originNamaImages = $resorce->getClientOriginalName();
            $NewNameImage = "IMG-" . substr(md5($originNamaImages . date("YmdHis")), 0, 14);
            $namasamplefoto = $NewNameImage . "." . $resorce->getClientOriginalExtension();

            $data = new loker();
            $data->title = $request->title;
            $data->slug = $slug;
            $data->type = 'magang';
            $data->locations = $request->locations;
            $data->content = $request->content;
            $data->description = $request->description;
            $data->date_start = $request->date_start;
            $data->date_end = $request->date_end;
            $data->images = $namasamplefoto;
            $resorce->move(public_path() . "/images/loker/", $namasamplefoto);
            if ($data->save()) {
                return redirect()->route('admin.magang')->with('success', 'news data saved successfully');
            } else {
                return redirect()->back()->with('error', 'sorry database is busy try again letter');
            }
        }
    }

    // public function show($id)
    // {
    //     $data= news::find($id);
    //     return view('admin.news.edit', [
    //         'data' => $data
    //     ]);
    // }

    public function edit($id)
    {
        $data = loker::find($id);
        return view('admin.working.magang.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'locations'  => 'required',
            'description'      => 'required',
            'content'      => 'required',
            'date_start'      => 'required',
            'date_end'      => 'required',
        ], [
            'title.required'        => 'Please input field title jobs',
            'locations.required'  => 'Please input locations job',
            'description.required'      => 'Please input description job',
            'content.required'      => 'Please input content job',
            'date_start.required'      => 'Please input date post job',
            'date_end.required'      => 'Please input end date post job',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // slug from title
            $slug = Str::slug($request->title);
            if ($request->images) {
                $validImages = Validator::make($request->all(), [
                    'images'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:4512',
                ], [
                    'images.image'          => 'File is not images',
                    'images.mimes'          => 'File must be images',
                    'images.max'            => 'File images oversized',
                ]);
                if ($validImages->fails()) {
                    return redirect()->back()->withErrors($validImages)->withInput();
                } else {
                    // images 
                    $resorce = $request->images;
                    $originNamaImages = $resorce->getClientOriginalName();
                    $NewNameImage = "IMG-" . substr(md5($originNamaImages . date("YmdHis")), 0, 14);
                    $namasamplefoto = $NewNameImage . "." . $resorce->getClientOriginalExtension();
                    // update with images
                    $data = loker::find($id);
                    $data->title = $request->title;
                    $data->slug = $slug;
                    $data->type = 'magang';
                    $data->content = $request->content;
                    $data->description = $request->description;
                    $data->date_start = $request->date_start;
                    $data->date_end = $request->date_end;
                    $data->images = $namasamplefoto;
                    $resorce->move(public_path() . "/images/loker/", $namasamplefoto);
                    if ($data->save()) {
                        return redirect()->route('admin.magang')->with('success', 'news data saved successfully');
                    } else {
                        return redirect()->back()->with('error', 'sorry database is busy try again letter');
                    }
                }
            } else {
                // update no images
                $data = loker::find($id);
                $data->title = $request->title;
                $data->slug = $slug;
                $data->type = 'magang';
                $data->content = $request->content;
                $data->description = $request->description;
                $data->date_start = $request->date_start;
                $data->date_end = $request->date_end;
                if ($data->save()) {
                    return redirect()->route('admin.magang')->with('success', 'news data saved successfully');
                } else {
                    return redirect()->back()->with('error', 'sorry database is busy try again letter');
                }
            }
        }
    }
}
