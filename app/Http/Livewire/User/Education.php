<?php

namespace App\Http\Livewire\User;

use App\Models\educations;
use Livewire\Component;

class Education extends Component
{
    public $id_educations;
    public $institution, $degree, $study, $month_start, $years_start, $month_end, $years_end, $status, $info;
    public $update = false;

    protected $listeners = ['deleteActionEducations' => 'deleteEducations'];

    protected $rules = [
        'institution'     => 'required',
        'degree'     => 'required',
        'study'     => 'required',
        'month_start'     => 'required',
        'years_start'     => 'required',
        'month_end'     => 'required',
        'years_end'     => 'required',
    ];

    protected $messages = [
        'institution.required'     => 'please input your position!',
        'degree.required'     => 'please input your company name',
        'study.required'     => 'please input your company name',
        'month_start.required'     => 'please select start mount your work',
        'years_start.required'     => 'please select start years your work',
        'month_end.required'     => 'please select end mount your work',
        'years_end.required'     => 'please select end years your work',
    ];

    public function show()
    {
        $this->institution = "";
        $this->degree = "";
        $this->study = "";
        $this->month_start = "";
        $this->years_start = "";
        $this->month_end = "";
        $this->years_end = "";
        $this->status = "";
        $this->info = "";
        $this->dispatchBrowserEvent('showEducation');
    }

    public function edit($id)
    {
        $data = educations::find($id);
        $this->id_educations = $id;
        $this->institution = $data->institution;
        $this->degree = $data->degree;
        $this->study = $data->study;
        $this->month_start = $data->month_start;
        $this->years_start = $data->years_start;
        $this->month_end = $data->month_end;
        $this->years_end = $data->years_end;
        $this->status = $data->status;
        $this->info = $data->info;
        $this->update = true;
        $this->dispatchBrowserEvent('showEducation');
    }

    public function store()
    {
        $this->validate();
        if ($this->status == null or $this->status == "") {
            $this->status = 1;
        }
        $id = auth('user')->user()->id_users;
        if ($this->update === true) {
            $data = educations::find($this->id_educations);
        } else {
            $data =  new educations();
        }
        $data->institution = $this->institution;
        $data->degree = $this->degree;
        $data->study = $this->study;
        $data->month_start = $this->month_start;
        $data->years_start = $this->years_start;
        $data->month_end = $this->month_end;
        $data->years_end = $this->years_end;
        $data->status = $this->status;
        $data->info = $this->info;
        $data->id_users = $id;
        if ($data->save()) {
            $this->update = false;
            session()->flash('success', 'data pendidikan anda telah tersimpan');
        } else {
            session()->flash('error', 'Oops, sorry database is busy');
        }
        $this->dispatchBrowserEvent('expandEducation');
    }

    public function remove($id)
    {
        $this->id_educations = $id;
        $this->dispatchBrowserEvent('deleteEducations');
    }
    public function deleteEducations()
    {
        $educations = educations::find($this->id_educations);
        if ($educations->delete()) {
            session()->flash('success', 'Data Pendidikan kamu terhapus');
        } else {
            session()->flash('error', 'Data tidak ditemukan!');
        }
    }

    public function render()
    {
        $id = auth('user')->user()->id_users;
        $data =  educations::where('id_users', $id)->orderBy('created_at', 'desc')->get();
        return view('livewire.user.education', [
            'data' => $data
        ]);
    }
}
