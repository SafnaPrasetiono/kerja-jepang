<?php

namespace App\Http\Livewire\Admin\Pages\Branda;

use App\Models\banner as ModelsBanner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Banner extends Component
{
    use WithFileUploads;

    public $id_banners;
    public $bannerSM, $bannerLG;

    protected $listeners = ['deleteAction' => 'delete' ];

    protected $rules = [
        'bannerSM'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        'bannerLG'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
    ];

    protected $messages = [
        'bannerSM.required' => 'Oops, pleas input banner phone!',
        'bannerSM.image' => 'Oops sepertinya yang diupload bukan gambar!',
        'bannerSM.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        'bannerSM.max' => 'Ukuran gambar maksimal 4mb!',

        'bannerLG.required' => 'Oops, pleas input banner phone!',
        'bannerLG.image' => 'Oops sepertinya yang diupload bukan gambar!',
        'bannerLG.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        'bannerLG.max' => 'Ukuran gambar maksimal 4mb!',
    ];

    public function show()
    {
        $this->bannerSM = '';
        $this->bannerLG = '';
        $this->dispatchBrowserEvent('bannerModalShow');
    }

    public function store()
    {
        $this->validate();

        $resorceSM = $this->bannerSM;
        $originNameSM = $resorceSM->getClientOriginalName();
        $IMGSM = "BNR-" . substr(md5($originNameSM . date("YmdHis")), 0, 28) . '.' . $resorceSM->getClientOriginalExtension();

        $resorceLG = $this->bannerLG;
        $originNameLG = $resorceLG->getClientOriginalName();
        $IMGLG = "BNR-" . substr(md5($originNameLG . date("YmdHis")), 0, 28) . '.' . $resorceLG->getClientOriginalExtension();

        $data = new ModelsBanner();
        $data->banners_sm = $IMGSM;
        $data->banners_lg = $IMGLG;
        if ($data->save()) {
            $resorceSM->storeAs('/images/banner/',  $IMGSM, 'myLocal');
            $resorceLG->storeAs('/images/banner/',  $IMGLG, 'myLocal');
            session()->flash('success', 'Data banner telah ditambahkan');
        } else {
            session()->flash('error', 'Oops, Something worng with databse, try again letter!');
        }
        $this->dispatchBrowserEvent('bannerModalExpand');
    }

    public function removed($id)
    {
        $this->id_banners = $id;

        $this->dispatchBrowserEvent('deleteConfrimed');
    }

    public function delete(){
        $data = ModelsBanner::find($this->id_banners);
        if($data){
            $data->delete();
            session()->flash('success', 'Data banner telah dihapus');
        } else {
            session()->flash('error', 'Oops, Maaf databse sedang sibuk, ulangin nanti!');
        }
    }

    public function render()
    {
        $data =  ModelsBanner::orderBy('created_at', 'desc')->get();
        return view('livewire.admin.pages.branda.banner', [
            'data' => $data
        ]);
    }
}
