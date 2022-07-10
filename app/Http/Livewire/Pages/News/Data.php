<?php

namespace App\Http\Livewire\Pages\News;

use App\Models\news;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;

    public function render()
    {
        $data = news::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.pages.news.data', [
            'data' => $data
        ]);
    }
}
