<?php

namespace App\Http\Controllers;

use App\Models\loker;
use App\Models\magang;
use Illuminate\Http\Request;

class magangController extends Controller
{
    public function index()
    {
        return view('pages.magang.index');
    }

    public function detail($slug)
    {
        $data = loker::where('slug', $slug)->first();
        return view('pages.magang.detail', ['data' => $data]);
    }
}
