<?php

namespace App\Http\Livewire\User\Setting;

use App\Models\User;
use Livewire\Component;

class Contact extends Component
{
    public $phone;

    public function mount(){
        $this->phone = auth('user')->user()->phone;
    }
    public function store(){
        $id = auth('user')->user()->id_users;
        $data = User::find($id);
        $data->phone = $this->phone;
        if($data->save()){
            session()->flash('success', 'Nomor telepon anda telah di perbarui');
        }else{
            session()->flash('error', 'Oops, sorry database is busy');
        }
    }
    public function render()
    {
        return view('livewire.user.setting.contact');
    }
}
