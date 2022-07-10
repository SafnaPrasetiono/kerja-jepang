<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingUser extends Controller
{
    // show settting
    public function setting()
    {
        return view('user.setting');
    }
}
