<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;


class Biodata extends Component
{
    public $username, $gender, $phone, $born, $country;

    protected $rules = [
        'username'     => 'required',
        'gender'     => 'required',
        'phone'     => 'required|integer',
        'born'     => 'required',
        'country'     => 'required',
        // 'images'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
    ];

    protected $messages = [
        'label.required' => 'please input the category label!',
        'gender.required' => 'please select the gender!',
        'phone.required' => 'please input your phone number!',
        'phone.integer' => 'your phone number not valid!',
        'born.required' => 'please choise the born!',
        'country.required' => 'please input your country',
        // 'images.required' => 'Category must input images!',
        // 'images.image' => 'Oops sepertinya yang diupload bukan gambar!',
        // 'images.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        // 'images.max' => 'Ukuran gambar maksimal 4mb!',
    ];

    public function mount()
    {
        $this->username = auth('user')->user()->username;
        $this->gender = auth('user')->user()->gender;
        $this->phone = auth('user')->user()->phone;
        $this->born = auth('user')->user()->born;
        $this->country = auth('user')->user()->country;
    }
    
    public function edit()
    {
        $this->dispatchBrowserEvent('edit');
    }

    public function update()
    {
        $this->validate();
        $id = auth('user')->user()->id_users;
        // dd($id);

        $data = User::find($id);
        $slug = Str::slug($this->username);
        if($data){
            $data->username = $this->username;
            $data->slug = $slug;
            $data->gender = $this->gender;
            $data->phone = $this->phone;
            $data->born = $this->born;
            $data->country = $this->country;
            if($data->save()){
                session()->flash('success', 'data profile anda telah terupdate');
            } else {
                session()->flash('error', 'Oops, sorry database is busy');
            }
        }else{
            session()->flash('error', 'Please login with your account');
        }
        $this->dispatchBrowserEvent('expandModels');
    }

    public function render()
    {
        $id_users = auth('user')->user()->id_users;
        $user = User::find($id_users);
        return view('livewire.user.biodata', [
            'user' => $user
        ]);
    }
}
