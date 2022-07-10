<?php

namespace App\Http\Livewire\User;

use App\Models\certificate as ModelsCertificate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Certificate extends Component
{
    use WithFileUploads;

    public $certificate;

    protected $rules = [
        'certificate' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,pdfx,doc,docx|max:4096',
    ];

    protected $messages = [
        'certificate.required' => 'please input your certificate!',
        'certificate.mimes' => 'Oops your file is not valid!',
        'certificate.max' => 'Oops your file is large!',
    ];

    public function show()
    {
        $this->dispatchBrowserEvent('showCertificate');
    }

    public function store()
    {
        $this->validate();
        $id = auth('user')->user()->id_users;
        $resorce = $this->certificate;
        $originFileName = $resorce->getClientOriginalName();
        $newFileName = "CER-" . substr(md5($originFileName . date("YmdHis")), 0, 27) . $id;
        $FileName = $newFileName . "." . $resorce->getClientOriginalExtension();

        // chek resume
        $data = ModelsCertificate::where('id_users', $id)->first();
        if ($data) {
            $data->certificate = $FileName;
        } else {
            $data =  new ModelsCertificate();
            $data->certificate = $FileName;
        }
        $data->id_users = $id;
        if ($data->save()) {
            $resorce->storeAs('/documents/certificate',  $FileName, 'myLocal');
            session()->flash('success', 'data pendidikan anda telah tersimpan');
        } else {
            session()->flash('error', 'Oops, sorry database is busy');
        }
        $this->dispatchBrowserEvent('expandCertificate');
    }

    public function render()
    {
        $id = auth('user')->user()->id_users;
        $data = ModelsCertificate::where('id_users', $id)->first();
        return view('livewire.user.certificate', [
            'DataSertif' => $data
        ]);
    }
}
