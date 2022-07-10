<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class galeryAdmin extends Controller
{
    // show galery admin pages
    public function index()
    {
        return view('admin.galery.data');
    }
}
