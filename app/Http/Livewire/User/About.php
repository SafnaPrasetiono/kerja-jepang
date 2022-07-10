<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\users_about;
use Livewire\Component;
use Illuminate\Support\Str;

class About extends Component
{
    public $aboutMe, $aboutUser;

    protected $rules = [
        'aboutMe'     => 'required',
    ];

    protected $messages = [
        'AboutMe.required' => 'please input the category label!',
    ];
    
    public function edit()
    {
        $this->dispatchBrowserEvent('editAbout');
    }

    public function update()
    {
        $this->validate();
        $id = auth('user')->user()->id_users;
        if($id){
            $data = users_about::where('id_users', $id)->first();
            if($data){
                $data->about = $this->aboutMe;
            }else{
                $data = new users_about();
                $data->about = $this->aboutMe;
            }
            $data->id_users = $id;
            if($data->save()){
                session()->flash('success', 'data profile anda telah terupdate');
            } else {
                session()->flash('error', 'Oops, sorry database is busy');
            }
        }else{
            session()->flash('error', 'Please login with your account');
        }
        $this->dispatchBrowserEvent('expandAbout');
    }

    public function render()
    {
        $id = auth('user')->user()->id_users;
        $this->aboutUser = users_about::where('id_users',$id)->first();
        return view('livewire.user.about');
    }
}
