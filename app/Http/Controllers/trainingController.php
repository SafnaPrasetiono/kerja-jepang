<?php

namespace App\Http\Controllers;

use App\Models\training;
use Illuminate\Http\Request;

class trainingController extends Controller
{
    public function index()
    {
        return view('pages.training.index');
    }

    public function detail($slug, $id)
    {
        $data = training::find($id);
        return view('pages.training.detail', [
            'data' => $data
        ]);
    }
}
