<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\news as ModelsNews;
use Livewire\Component;

class News extends Component
{

    public function render()
    {
        $data = ModelsNews::orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.pages.index.news', [
            'data' => $data
        ]);
    }
}
