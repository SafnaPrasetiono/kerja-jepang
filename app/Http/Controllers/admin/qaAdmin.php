<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\qa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class qaAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.qa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.qa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(), [
            'question'  => 'required',
            'answer'  => 'required'
        ], [
            'question.required' => 'Oops, anda belum input pertanyaan',
            'answer.required' => 'Oops, anda belum menjawab pertannyaan',
        ]);
        if ($validations->fails()) {
            return redirect()->back()->withErrors($validations)->withInput();
        } else {
            $data = new qa();
            $data->question = $request->question;
            $data->answer = $request->answer;
            $data->about = $request->about;
            if ($data->save()) {
                return redirect()->route('admin.qa')->with('success', 'Data qa telah ditambahkan');
            } else {
                return redirect()->route('admin.qa')->with('error', 'Oops, Something worng with databse, try again letter!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = qa::find($id);
        return view('admin.qa.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(), [
            'question'  => 'required',
            'answer'  => 'required'
        ], [
            'question.required' => 'Oops, anda belum input pertanyaan',
            'answer.required' => 'Oops, anda belum menjawab pertannyaan',
        ]);
        if ($validations->fails()) {
            return redirect()->back()->withErrors($validations)->withInput();
        } else {
            $data = qa::find($id);
            $data->question = $request->question;
            $data->answer = $request->answer;
            $data->about = $request->about;
            if ($data->save()) {
                return redirect()->route('admin.qa')->with('success', 'Data qa telah ditambahkan');
            } else {
                return redirect()->route('admin.qa')->with('error', 'Oops, Something worng with databse, try again letter!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
