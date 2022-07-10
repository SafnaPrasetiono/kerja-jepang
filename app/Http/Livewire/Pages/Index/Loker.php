<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\loker as ModelsLoker;
use Livewire\Component;

class Loker extends Component
{
    public function render()
    {   
        $data = ModelsLoker::where('type', 'loker')->orderBy('created_at', 'desc')->limit(6)->get();
        return view('livewire.pages.index.loker', [
            'data' => $data
        ]);
    }
}
