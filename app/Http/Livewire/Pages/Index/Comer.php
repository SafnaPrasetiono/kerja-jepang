<?php

namespace App\Http\Livewire\Pages\Index;

use Livewire\Component;

class Comer extends Component
{
    public function render()
    {
        $data = 0;
        return view('livewire.pages.index.comer', [
            'data' => $data
        ]);
    }
}
