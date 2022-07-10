<?php

namespace App\Http\Livewire\User\Setting;

use App\Models\User;
use Livewire\Component;

class Account extends Component
{
    public $password, $confirmation;
    public $cek;

    protected $rules = [
        'password'  => 'required',
        'confirmation'  => 'required'
    ];
    protected $messages = [
        'password.required' => 'Oops, password tidak boleh kosong!',
        'confirmation.required' => 'Oops, konfirmasi password tidak boleh kosong!',
    ];

    public function updated()
    {
        $this->validate();
    }

    public function show(){
        $this->password = '';
        $this->confirmation = '';
        $this->dispatchBrowserEvent('pModalShow');
    }

    public function setup(){
        $id = auth('user')->user()->id_users;
        if($this->password != $this->confirmation){
            session()->flash('error', 'Oops, password dan konfrimasi password tidak sama!');
        } else {
            $data = User::find($id);
            $data->password = encrypt($this->password);
            if($data->save()){
                session()->flash('success', 'Password berhasil dirubah!');
            }else{
                session()->flash('error', 'Oops, maaf database sedang sibuk!');
            }   
        }
    }

    public function render()
    {
        return view('livewire.user.setting.account');
    }
}
