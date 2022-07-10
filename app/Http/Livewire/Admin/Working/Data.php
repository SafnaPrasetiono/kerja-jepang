<?php

namespace App\Http\Livewire\Admin\Working;

use App\Models\loker;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $id_loker;
    public $type;
    public $search;

    protected $listeners = ["deleteAction" => "delete"];

    public function mount($post)
    {
        $this->type = $post;
    }

    public function removed($id){
        $this->id_loker = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }

    public function delete()
    {
        $data = loker::find($this->id_loker);
        if ($data) {
            $data->delete();
            return session()->flash('success', 'Data has been delete!');
        } else {
            return session()->flash('error', 'sorry something problem in database!');
        }
    }

    public function render()
    {
        $data = loker::where('type', $this->type)->orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.working.data', [
            'data' => $data
        ]);
    }
}
