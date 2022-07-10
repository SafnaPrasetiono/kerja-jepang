<?php

namespace App\Http\Livewire\Admin\Banners;

use App\Models\banners;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title, $description, $links, $imagesDesktop, $imagesPhone;
    public $showTextPhone, $showTextDesktop;
    public $content;

    protected $rules = [
        'imagesDesktop'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        'imagesPhone'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
    ];

    protected $messages = [
        'imagesDesktop.required' => 'Oops, pleas input banner dektop!',
        'imagesDesktop.image' => 'Oops sepertinya yang diupload bukan gambar!',
        'imagesDesktop.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        'imagesDesktop.max' => 'Ukuran gambar maksimal 4mb!',

        'imagesPhone.required' => 'Oops, pleas input banner phone!',
        'imagesPhone.image' => 'Oops sepertinya yang diupload bukan gambar!',
        'imagesPhone.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        'imagesPhone.max' => 'Ukuran gambar maksimal 4mb!',
    ];

    public function preview()
    {
        $this->dispatchBrowserEvent('previewModals');
    }

    public function store()
    {
        $this->validate();

        $resorceLG = $this->imagesDesktop;
        $originNameLG = $resorceLG->getClientOriginalName();
        $IMGLG = "BNR-" . substr(md5($originNameLG . date("YmdHis")), 0, 28) . '.' . $resorceLG->getClientOriginalExtension();
        
        $resorceSM = $this->imagesPhone;
        $originNameSM = $resorceSM->getClientOriginalName();
        $IMGSM = "BNR-" . substr(md5($originNameSM . date("YmdHis")), 0, 28) . '.' . $resorceSM->getClientOriginalExtension();


        $data = new banners();
        $data->title = $this->title;
        $data->description = $this->description;
        $data->link = $this->links;
        $data->images_desktop = $IMGLG;
        $data->text_desktop = $this->showTextDesktop;
        $data->images_phone = $IMGSM;
        $data->text_phone = $this->showTextPhone;
        if ($data->save()) {
            $resorceLG->storeAs('/images/banner/',  $IMGLG, 'myLocal');
            $resorceSM->storeAs('/images/banner/',  $IMGSM, 'myLocal');
            return redirect()->route('admin.banners')->with('success', 'Data banner telah ditambahkan');
        } else {
            $this->dispatchBrowserEvent('error', 'Oops, Something worng with databse, try again letter!');
        }
    }


    public function render()
    {
        return view('livewire.admin.banners.create');
    }
}
