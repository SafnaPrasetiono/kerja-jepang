<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admins;
use App\Models\comers;
use App\Models\galery;
use App\Models\loker;
use App\Models\magang;
use App\Models\news;
use App\Models\qa;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // show dashabord
    public function index()
    {
        $user = User::count();
        $admin = admins::count();
        $qa     = qa::count();
        $news   = news::count();
        $loker  = loker::count();
        $magang = magang::count();
        $comer  = comers::count();
        $galery = galery::count();
        return view('admin.index', [
            'user' => $user,
            'admin' => $admin,
            'qa' => $qa, 
            'news' => $news, 
            'loker' => $loker, 
            'magang' => $magang, 
            'comer' => $comer, 
            'galery' => $galery
        ]);
    }
}
