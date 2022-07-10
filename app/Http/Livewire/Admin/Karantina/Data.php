<?php

namespace App\Http\Livewire\Admin\Karantina;

use App\Models\comers;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use  WithPagination;
    public function render()
    {
        $data = comers::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.karantina.data', [
            'data' => $data
        ]);
    }
}
