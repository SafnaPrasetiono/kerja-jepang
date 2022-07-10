<?php

namespace App\Http\Livewire\Pages\Galery;

use App\Models\galery;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $detailImg;
    public function show($id){
        $this->detailImg = galery::find($id);
        $this->dispatchBrowserEvent('showModal');
    }

    public function render()
    {
        $data = galery::orderBy('created_at', 'desc')->paginate(16);
        return view('livewire.pages.galery.data', ['data' => $data]);
    }
}
