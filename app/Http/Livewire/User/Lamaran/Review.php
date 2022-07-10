<?php

namespace App\Http\Livewire\User\Lamaran;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Review extends Component
{
    use WithPagination;
    public function render()
    {
        $id = auth('user')->user()->id_users;
        $data = DB::table('view_proposal_users')->where('id_users', $id)->where('status', 'review')->paginate('8');
        return view('livewire.user.lamaran.review', ['data'=> $data]);
    }
}
