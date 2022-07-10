<?php

namespace App\Http\Controllers;

use App\Models\loker;
use Illuminate\Http\Request;

class lokerController extends Controller
{
    public function index()
    {
        return view('pages.loker.index');
    }

    public function detail($slug)
    {
        $data = loker::where('slug', $slug)->first();
        return view('pages.loker.detail', ['data' => $data]);
    }
}
