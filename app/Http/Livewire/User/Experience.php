<?php

namespace App\Http\Livewire\User;

use App\Models\experience as ModelsExperience;
use Livewire\Component;

class Experience extends Component
{
    public $id_experience;
    public $position, $company, $month_start, $years_start, $month_end, $years_end, $status, $info;
    public $update = false;

    protected $listeners = ['deleteAction' => 'delete'];

    protected $rules = [
        'position'     => 'required',
        'company'     => 'required',
        'month_start'     => 'required',
        'years_start'     => 'required',
        'month_end'     => 'required',
        'years_end'     => 'required',
    ];

    protected $messages = [
        'position.required'     => 'please input your position!',
        'company.required'     => 'please input your company name',
        'month_start.required'     => 'please select start mount your work',
        'years_start.required'     => 'please select start years your work',
        'month_end.required'     => 'please select end mount your work',
        'years_end.required'     => 'please select end years your work',
    ];

    public function show()
    {
        $this->position = "";
        $this->company = "";
        $this->month_start = "";
        $this->years_start = "";
        $this->month_end = "";
        $this->years_end = "";
        $this->status = "";
        $this->info = "";
        $this->dispatchBrowserEvent('showExperience');
    }

    public function edit($id)
    {
        $data = ModelsExperience::find($id);
        $this->id_experience = $id;
        $this->position = $data->position;
        $this->company = $data->company;
        $this->month_start = $data->month_start;
        $this->years_start = $data->years_start;
        $this->month_end = $data->month_end;
        $this->years_end = $data->years_end;
        $this->status = $data->status;
        $this->info = $data->info;
        $this->update = true;
        $this->dispatchBrowserEvent('showExperience');
    }

    public function store()
    {
        $this->validate();

        if ($this->status == null or $this->status == "") {
            $this->status = 1;
        }
        $id = auth('user')->user()->id_users;
        if ($this->update === true) {
            $data = ModelsExperience::find($this->id_experience);
        } else {
            $data =  new ModelsExperience();
        }
        $data->position = $this->position;
        $data->company = $this->company;
        $data->month_start = $this->month_start;
        $data->years_start = $this->years_start;
        $data->month_end = $this->month_end;
        $data->years_end = $this->years_end;
        $data->status = $this->status;
        $data->info = $this->info;
        $data->id_users = $id;
        if ($data->save()) {
            $this->update = false;
            session()->flash('success', 'data pengalaman kerja anda telah tersimpan');
        } else {
            session()->flash('error', 'Oops, sorry database is busy');
        }
        $this->dispatchBrowserEvent('expandExperience');
    }

    public function remove($id)
    {
        $this->id_experience = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }
    public function delete()
    {
        $data = ModelsExperience::find($this->id_experience);
        if ($data->delete()) {
            session()->flash('success', 'Data Pendidikan kamu terhapus');
        } else {
            session()->flash('error', 'Data tidak ditemukan!');
        }
    }

    public function render()
    {
        $id = auth('user')->user()->id_users;
        $data =  ModelsExperience::where('id_users', $id)->orderBy('created_at', 'desc')->get();
        return view('livewire.user.experience', [
            'data' => $data
        ]);
    }
}
