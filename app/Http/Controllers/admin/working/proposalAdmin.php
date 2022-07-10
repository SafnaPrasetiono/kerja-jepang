<?php

namespace App\Http\Controllers\admin\working;

use App\Http\Controllers\Controller;
use App\Models\loker;
use Illuminate\Http\Request;
use App\Models\proposal;
use App\Models\User;
use App\Models\users_validation;

class proposalAdmin extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $loker = loker::find($id);
        return view('admin.working.proposal.index', [
            'loker' => $loker,
            // 'data' => $data,
        ]);
        // if ($data->count() == 0) {
        // } else {
        //     $user = User::find($data->id_users);
        //     $userPublic = users_validation::where('id_users', $data->id_users)->first();
        //     return view('admin.working.proposal.index', [
        //         'loker' => $loker,
        //         'data' => $data,
        //         'user' => $user,
        //         'userPublic' => $userPublic
        //     ]);
        // }
    }

    public function post(Request $request)
    {
        $id = $request->id_proposal;
        $data = proposal::find($id);
        $data->status = $request->status;
        $data->content = $request->content;
        if ($data->save()) {
            return redirect()->back()->with('success', 'Lamaran telah diinfokan ke user');
        } else {
            return redirect()->back()->with('error', 'sorry database is busy');
        }
    }
}
