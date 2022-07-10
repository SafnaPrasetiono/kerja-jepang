<?php

namespace App\Http\Livewire\Admin\Proposal;

use App\Models\proposal;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $id_lokers;

    public $detail;
    public $status, $content;

    public function mount($id)
    {
        $this->id_lokers = $id;
    }

    public function action($id)
    {
        $detail = proposal::find($id);
        $this->dispatchBrowserEvent('actions', $detail);
    }

    public function render()
    {
        $data = DB::table('view_proposal_users')->where('id_lokers', $this->id_lokers)->paginate(12);
        return view('livewire.admin.proposal.data', [
            'data' => $data
        ]);
    }
}
