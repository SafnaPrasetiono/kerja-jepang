<?php

namespace App\Http\Livewire\Admin\Qa;

use App\Models\qa;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $id_qa;
    public $question, $answer, $about;
    public $edit = false;
    public $search;

    // for validations function
    protected $rules = [
        'question'  => 'required',
        'answer'  => 'required'
    ];
    protected $messages = [
        'question.required' => 'Oops, anda belum input pertanyaan',
        'answer.required' => 'Oops, anda belum menjawab pertannyaan',
    ];

    // for insert function
    public function show($id)
    {
        $data = qa::find($id);
        $this->question = $data->question;
        $this->answer   = $data->answer;
        $this->about    = $data->about;
        $this->dispatchBrowserEvent('ModalShow');
    }

    // for delete function
    protected $listeners = ['deleteAction' => 'delete' ];
    public function removed($id)
    {
        $this->id_qa = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }
    public function delete(){
        $data = qa::find($this->id_qa);
        if($data){
            $data->delete();
            session()->flash('success', 'Data banner telah dihapus');
        } else {
            session()->flash('error', 'Oops, Maaf databse sedang sibuk, ulangin nanti!');
        }
    }

    public function render()
    {
        if($this->search){
            $data = qa::where('question', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc')->paginate(12);
        }else{
            $data = qa::orderBy('created_at', 'desc')->paginate(12);
        }
        return view('livewire.admin.qa.index', ['data' => $data]);
    }
}
