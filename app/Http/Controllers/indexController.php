<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use App\Models\educations;
use App\Models\experience;
use App\Models\galery;
use App\Models\news;
use App\Models\resume;
use App\Models\skill;
use App\Models\User;
use App\Models\users_about;
use App\Models\users_validation;
use Illuminate\Http\Request;

class indexController extends Controller
{
    // show index pages
    public function index()
    {
        return view('index');
    }
    public function procedure()
    {
        return view('pages.procedure');
    }

    public function galery()
    {
        return view('pages.galery');
    }

    public function qa(){
        return view('pages.qa');
    }

    public function aboutme()
    {
        return view('pages.aboutme');
    }

    public function usersprofile($key)
    {
        $data = users_validation::where('key', $key)->first();
        $user = User::find($data->id_users);
        $aboutUsers = users_about::where('id_users', $user->id_users)->first();
        $experience = experience::where('id_users', $user->id_users)->get();
        $educations = educations::where('id_users', $user->id_users)->get();
        $skill = skill::where('id_users', $user->id_users)->get();
        return view('pages.userPublic', [
            'user' => $user,
            'aboutUsers' => $aboutUsers,
            'experience' => $experience,
            'educations' => $educations,
            'skill' => $skill,
        ]);
    }
}
