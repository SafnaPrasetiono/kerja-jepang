<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\educations;
use App\Models\experience;
use App\Models\loker;
use App\Models\proposal;
use App\Models\User;
use App\Models\users_about;
use Illuminate\Http\Request;

class proposalUsers extends Controller
{
    public function index()
    {
        return view('admin.proposal.index');
    }

    public function detail($id)
    {
        $data = proposal::where('id_proposal', $id)->first();
        $loker = loker::find($data->id_lokers);
        $user = User::find($data->id_users);
        $aboutUser = users_about::where('id_users', $data->id_users)->first();
        $educations = educations::where('id_users', $data->id_users)->first();
        $experience = experience::where('id_users', $data->id_users)->first();
        return view('admin.proposal.detail', [
            'data' => $data,
            'loker' => $loker,
            'user' => $user,
            'aboutUser' => $aboutUser,
            'educations'=> $educations,
            'experience' => $experience
        ]);
    }
}
