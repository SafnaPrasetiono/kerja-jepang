<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\training as ModelsTraining;
use Livewire\Component;

class Training extends Component
{
    public function render()
    {
        $data = ModelsTraining::orderBy('created_at', 'desc')->limit(6)->get();
        return view('livewire.pages.index.training', [
            'data' => $data
        ]);
    }
}
