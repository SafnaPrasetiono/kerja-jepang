<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\comers;
use App\Models\comers_address;
use App\Models\comers_documents;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class karantinaAdmin extends Controller
{
    // show index
    public function index(){
        return view('admin.karantina.data');
    }

    public function detail($id){
        $comer = comers::find($id);
        $user = User::find($comer->users_id);
        $comer_address = comers_address::where('comers_id', $id)->first();
        $comer_document = comers_documents::where('comers_id', $id)->first();
        // dd($comer_document);
        return view('admin.karantina.detail', [
           'comer' => $comer,
           'user' => $user,
           'address' => $comer_address,
           'documents' => $comer_document, 
        ]);
    }

    public function createPDF($id){
        $comer = comers::find($id);
        $user = User::find($comer->users_id);
        $comer_address = comers_address::where('comers_id', $id)->first();
        $comer_document = comers_documents::where('comers_id', $id)->first();
        
        $pdf = PDF::loadView('admin.documents.karantina', [
           'comer' => $comer,
           'user' => $user,
           'address' => $comer_address,
           'documents' => $comer_document, 
        ]);
        // dd($pdf);
        
        $KARANTINA = $user->username . '-' . $comer->id_comers .'.pdf';
        return $pdf->download('pendaftaran.pdf');
    }
}
