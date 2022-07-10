<?php

namespace App\Http\Livewire\Pages\Qa;

use App\Models\qa;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        if($this->search){
            $data = qa::where('question', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc')->paginate(12);
        }else{
            $data = qa::orderBy('created_at', 'desc')->paginate(12);
        }
        return view('livewire.pages.qa.data', [
            'data' => $data
        ]);
    }
}
