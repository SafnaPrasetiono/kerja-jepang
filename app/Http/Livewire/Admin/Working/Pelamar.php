<?php

namespace App\Http\Livewire\Admin\Loker;

use App\Models\loker;
use App\Models\proposal;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Pelamar extends Component
{
    use WithPagination;
    public $id_lokers;
    public $id_proposal;

    public $username, $resume, $certificate, $status, $description, $content;

    public function mount($id)
    {
        $this->id_lokers = $id;
    }

    public function detail($id)
    {
        $data = proposal::find($id);
        $user = User::find($data->id_users);
        $this->username = $user->username;
        $this->status = $data->status;
        $this->description = $data->description;
        $this->resume = $data->resume;
        $this->certificate = $data->certificate;
        $this->dispatchBrowserEvent('showModals');
    }

    public function edit($id)
    {
        // dd($id);
        $data = proposal::find($id);
        $user = User::find($data->id_users);
        $this->id_proposal = $id;
        $this->username = $user->username;
        $this->status = $data->status;
        $this->description = $data->description;
        $this->resume = $data->resume;
        $this->certificate = $data->certificate;
        $this->dispatchBrowserEvent('showEditModals');
    }

    public function store()
    {
        $data = proposal::find($this->id_proposal);
        $data->status = $this->status;
        $data->content = $this->content;
        if($data->save()){
            session()->flash('success', 'Lamaran telah diinfokan ke user');
        }else{
            session()->flash('error', 'sorry database is busy');
        }
        $this->dispatchBrowserEvent('expandEditModal');
    }

    public function render()
    {
        $data = DB::table('view_proposal_users')->where('id_lokers', $this->id_lokers)->paginate(12);
        return view('livewire.admin.loker.pelamar', [
            'data' => $data
        ]);
    }
}
