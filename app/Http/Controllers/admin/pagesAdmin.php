<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesAdmin extends Controller
{
    // show pages to edit page
    public function index()
    {
        return view('admin.pages.index');
    }

    public function beranda(){
        return view('admin.pages.beranda');
    }
}
