<?php

namespace App\Http\Livewire\User\Lamaran;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;
    public function render()
    {
        $id = auth('user')->user()->id_users;
        $data = DB::table('view_proposal_users')->where('id_users', $id)->paginate('8');
        return view('livewire.user.lamaran.all', [
            'data' => $data
        ]);
    }
}
