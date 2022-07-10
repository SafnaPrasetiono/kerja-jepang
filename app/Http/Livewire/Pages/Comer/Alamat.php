<?php

namespace App\Http\Livewire\Pages\Comer;

use App\Models\Province;
use Livewire\Component;

class Alamat extends Component
{
    public function render()
    {
        $province = Province::all();
        return view('livewire.pages.comer.alamat', ['province' => $province]);
    }
}
