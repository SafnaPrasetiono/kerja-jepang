<?php

namespace App\Http\Livewire\Pages\Training;

use App\Models\training;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $data = training::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.pages.training.data', [
            'data' => $data
        ]);
    }
}
