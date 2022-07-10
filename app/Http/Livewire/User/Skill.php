<?php

namespace App\Http\Livewire\User;

use App\Models\skill as ModelsSkill;
use Livewire\Component;

class Skill extends Component
{
    public $skill;

    protected $rules = [
        'skill'     => 'required',
    ];

    protected $messages = [
        'label.required' => 'please input your skills!',
    ];

    public function show()
    {
        $this->skill = '';
        $this->dispatchBrowserEvent('showSkill');
    }

    public function store()
    {
        $this->validate();
        $id = auth('user')->user()->id_users;
        $data = new ModelsSkill();
        $data->skill = $this->skill;
        $data->id_users = $id;
        if ($data->save()) {
            session()->flash('success', 'data kemampuan anda telah ditambahkan');
        } else {
            session()->flash('error', 'Oops, sorry database is busy');
        }
        $this->dispatchBrowserEvent('expandSkill');
    }

    public function deleteSkill($id)
    {
        $data = ModelsSkill::find($id);
        if ($data->delete()) {
            session()->flash('success', 'Data kemampuan kamu telah terhapus');
        } else {
            session()->flash('error', 'Data tidak ditemukan!');
        }
    }

    public function render()
    {
        $id = auth('user')->user()->id_users;
        $data = ModelsSkill::where('id_users', $id)->get();
        return view('livewire.user.skill', ['data' => $data]);
    }
}
