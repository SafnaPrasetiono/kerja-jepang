<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\loker;
use App\Models\proposal;
use Illuminate\Http\Request;

class lamaranUser extends Controller
{
    // show lamaran
    public function lamaran()
    {
        return view('user.lamaran.index');
    }
    public function detail($id)
    {
        $data = proposal::find($id);
        $loker = loker::find($data->id_lokers);
        return view('user.lamaran.detail', [
            'data' => $data,
            'loker' => $loker
        ]);
    }
}
