<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\loker;
use App\Models\magang as ModelsMagang;
use Livewire\Component;

class Magang extends Component
{
    public function render()
    {
        $data = loker::where('type', 'magang')->orderBy('created_at', 'desc')->limit(6)->get();
        // dd($data);
        return view('livewire.pages.index.magang', [
            'data' => $data
        ]);
    }
}
