<?php

namespace App\Http\Livewire\User;

use App\Models\resume as ModelsResume;
use Livewire\Component;
use Livewire\WithFileUploads;

class Resume extends Component
{

    use WithFileUploads;

    public $resume;

    protected $rules = [
        'resume'     => 'required|mimes:pdf,pdfx,doc,docx|max:512512',
    ];

    protected $messages = [
        'resume.required'     => 'please input your resume!',
        'resume.mimes' => 'Oops your file is not valid!',
        'resume.max' => 'Oops your file is large!',
    ];

    public function show()
    {
        $this->dispatchBrowserEvent('showResume');
    }

    public function store()
    {
        $this->validate();
        $id = auth('user')->user()->id_users;
        $resorce = $this->resume;
        $originFileName = $resorce->getClientOriginalName();
        $newFileName = "RES-" . substr(md5($originFileName . date("YmdHis")), 0, 27) . $id;
        $FileName = $newFileName . "." . $resorce->getClientOriginalExtension();

        // chek resume
        $data = ModelsResume::where('id_users', $id)->first();
        if ($data) {
            $data->resume = $FileName;
        } else {
            $data =  new ModelsResume();
            $data->resume = $FileName;
        }
        $data->id_users = $id;
        if ($data->save()) {
            $resorce->storeAs('/documents/resume',  $FileName, 'myLocal');
            session()->flash('success', 'data pendidikan anda telah tersimpan');
        } else {
            session()->flash('error', 'Oops, sorry database is busy');
        }
        $this->dispatchBrowserEvent('expandResume');
    }

    public function render()
    {
        $id = auth('user')->user()->id_users;
        $data = ModelsResume::where('id_users', $id)->first();
        // dd($data);
        return view('livewire.user.resume', [
            'DataResume' => $data
        ]);
    }
}
