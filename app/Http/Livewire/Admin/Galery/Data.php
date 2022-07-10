<?php

namespace App\Http\Livewire\Admin\Galery;

use App\Models\galery;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Data extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $images;
    public $id_galery;

    protected $listeners = ['deleteAction' => 'delete'];

    protected $rules = [
        'images'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
    ];

    protected $messages = [
        'label.required' => 'please input the category label!',
        'images.required' => 'Category must input images!',
        'images.image' => 'Oops sepertinya yang diupload bukan gambar!',
        'images.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        'images.max' => 'Ukuran gambar maksimal 4mb!',
    ];


    public function resetInput()
    {
        $this->label = null;
        $this->images = null;
    }

    public function create()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('modalShow');
    }
    public function store()
    {
        $this->validate();

        $resorce = $this->images;
        $originNamaImages = $resorce->getClientOriginalName();
        $size = $resorce->getSize();
        $NewNameImages = "IMG-" . substr(md5($originNamaImages . date("YmdHis")), 0, 28);
        $imgName = $NewNameImages . "." . $resorce->getClientOriginalExtension();

        $slug = Str::slug($originNamaImages);

        $galery = new galery();
        $galery->label = $originNamaImages;
        $galery->slug = $slug;
        $galery->size = $size;
        $galery->images = $imgName;
        if ($galery->save()) {
            $resorce->storeAs('/images/galery/',  $imgName, 'myLocal');
            // $resorce->move(public_path() . "/images/icons/design/" . $iconsName);
            session()->flash('success', 'Data telah ditambahkan');
        } else {
            session()->flash('error', 'Maff, data tidak dapat ditambahkan ulangi nanti');
        }
        $this->resetInput();
        $this->dispatchBrowserEvent('modalExpand');
    }
    public function edit($id)
    {
        $this->id_galery = $id;
        $data = galery::find($id);
        $this->label = $data->label;
        $this->images = '';
        $this->dispatchBrowserEvent('showEdit');
    }
    public function update()
    {
        $this->validate();
        $resorce = $this->images;
        $originNamaImages = $resorce->getClientOriginalName();
        $size = $resorce->getSize();
        $NewNameImages = "ICO-" . substr(md5($originNamaImages . date("YmdHis")), 0, 28);
        $iconsName = $NewNameImages . "." . $resorce->getClientOriginalExtension();
        $slug = Str::slug($originNamaImages);
        $ctg = galery::find($this->id_galery);
        $ctg->label = $originNamaImages;
        $ctg->slug = $slug;
        $ctg->size = $size;
        $ctg->images = $iconsName;
        if ($ctg->save()) {
            $resorce->storeAs('/images/product/category/',  $iconsName, 'myLocal');
            session()->flash('success', 'Data telah ditambahkan');
        } else {
            session()->flash('error', 'Maff, data tidak dapat ditambahkan ulangi nanti');
        }
        $this->dispatchBrowserEvent('modalExpand');
    }
    public function removed($id)
    {
        $this->id_galery = $id;
        $this->dispatchBrowserEvent('deleteConfrim');
    }
    public function delete()
    {
        $dataToDelete = galery::find($this->id_galery);
        if ($dataToDelete->delete()) {
            session()->flash('success', 'Data telah berhasil dihapus!');
        } else {
            session()->flash('error', 'Oops data tidak ditemukan!');
        }
    }

    public function render()
    {
        $data = galery::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.galery.data', [
            'data' => $data
        ]);
    }
}
