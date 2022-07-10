<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        if($this->search){
            $data = User::where('username', 'like', '%' . $this->search . '%')->paginate(12);
        }else{
            $data = User::paginate(12);
        }
        return view('livewire.admin.users.data', ['data'=> $data]);
    }
}
