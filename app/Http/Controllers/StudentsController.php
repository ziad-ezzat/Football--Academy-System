<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource .
     */
    public function index()
    {
        $stu = Students::all();
        return view('studentsW')->with('stu',$stu);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'stuname' => 'required|min:5|max:20',
            'stuphone' => 'required|unique:students,phone|min:11',
            'stuemail' => 'Email',
            'image' => 'mimes:png,jpg'
        ]);
        $stu = new Students();
        $stu->name = $request->stuname;
        $stu->city = $request->stucity;
        $stu->phone = $request->stuphone;
        $stu->email = $request->stuemail;
        //image code
        $image_data = $request->file('stuimage');
        $image_name = $image_data->getClientOriginalName();
        $image_data->move(public_path() . '/upload/' , $image_name);
        $stu->image = $image_name;
        $stu->save();
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $stu = Students::find($id);
        return view('showStudent')->with('stu',$stu);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stu = Students::find($id);
        return view('editStudent')->with('stu',$stu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'stuname' => 'required|min:5|max:20',
            'stuphone' => 'required|min:11',
            'stuemail' => 'Email'
        ]);
        $stu = Students::find($id);
        $stu->name = $request->stuname;
        $stu->city = $request->stucity;
        $stu->phone = $request->stuphone;
        $stu->email = $request->stuemail;
        $stu->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stu = Students::find($id);
        $stu->delete();
        return redirect()->back();
    }
}
