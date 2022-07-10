<?php

namespace App\Http\Livewire\Admin\Banners;

use App\Models\banners;
use Livewire\Component;
use Livewire\WithFileUploads;

class Data extends Component
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
    ];

    public function show()
    {
        $this->images = '';
        $this->bannerLG = '';
        $this->dispatchBrowserEvent('bannerModalShow');
    }

    public function store()
    {
        $this->validate();

        $banner = $this->images;
        $originNameSM = $banner->getClientOriginalName();
        $IMGBANNER = "BNR-" . substr(md5($originNameSM . date("YmdHis")), 0, 28) . '.' . $banner->getClientOriginalExtension();

        $data = new banners();
        $data->title = $this->title;
        $data->description = $this->description;
        $data->images = $IMGBANNER;
        if ($data->save()) {
            $banner->storeAs('/images/banner/',  $IMGBANNER, 'myLocal');
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
        $data = banners::find($this->id_banners);
        if($data){
            $data->delete();
            session()->flash('success', 'Data banner telah dihapus');
        } else {
            session()->flash('error', 'Oops, Maaf databse sedang sibuk, ulangin nanti!');
        }
    }

    public function render()
    {
        $data =  banners::orderBy('created_at', 'desc')->get();
        return view('livewire.admin.banners.data', ['data' => $data]);
    }
}
