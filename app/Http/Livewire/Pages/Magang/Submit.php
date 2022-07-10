<?php

namespace App\Http\Livewire\Pages\Magang;

use App\Models\certificate;
use App\Models\proposal;
use App\Models\resume;
use App\Models\wishlist;
use Livewire\Component;

class Submit extends Component
{
    public $users_id;
    public $magang;
    public $proposal;
    public $resume, $certificate;
    public $description;
    public $wishlist;

    public function show()
    {
        $this->dispatchBrowserEvent('showModals');
    }

    public function mount($post)
    {
        // dd($post);
        $this->magang = $post;
        $this->users_id = auth('user')->user()->id_users;
    }

    protected $rules = [
        'description'     => 'required',
    ];

    protected $messages = [
        'description.required' => 'please input why you apply this jobs!',
    ];

    public function store()
    {
        $this->validate();
        if($this->resume == null and $this->certificate == null){
            session()->flash('error', 'Oops, kamu belum upload resume dan sertifikat');
        } else {
            $data = new proposal();
            $data->resume = $this->resume['resume'];
            $data->certificate = $this->certificate['certificate'];
            $data->status = 'proccess';
            $data->description = $this->description;
            $data->id_lokers = $this->loker['id_lokers'];
            $data->id_users = $this->users_id;
            if($data->save()){
                session()->flash('success', 'Yay, lamaranmu telah terkirim');
            } else {
                session()->flash('error', 'Oops, sorry database is busy');
            }
            $this->dispatchBrowserEvent('expandModals');
        }
    }

    public function love()
    {
        
        $data = new wishlist();
        $data->lokers_id = $this->loker['id_lokers'];
        $data->users_id = $this->users_id;
        if($data->save()){
            session()->flash('success', 'Yay, loker telah masuk kedaftar kamu sukai');
        } else {
            session()->flash('error', 'Oops, sorry database is busy');
        }
    }

    public function unlove($id)
    {
        $data = wishlist::find($id);
        if($data->delete()){
            session()->flash('success', 'Loker telah dihapus dari daftar suka');
        } else {
            session()->flash('error', 'Oops, sorry database is busy');
        }
    }

    public function render()
    {
        $this->resume = resume::where('id_users', $this->users_id)->first();
        $this->certificate = certificate::where('id_users', $this->users_id)->first();
        $this->proposal = proposal::where('id_users', $this->users_id)->where('id_lokers', $this->magang['id_lokers'])->first();
        // $this->wishlist = wishlist::where('users_id', $this->users_id)->where('lokers_id', $this->loker['id_lokers'])->first();
        return view('livewire.pages.magang.submit');
    }
}
