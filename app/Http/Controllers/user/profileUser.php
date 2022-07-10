<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileUser extends Controller
{
    // show profile
    public function profile()
    {
        return view('user.profile');
    }

    public function logout()
    {
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
            return redirect()->route('index');
        }
    }
}
