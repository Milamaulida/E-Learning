<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks = Mark::simplePaginate(10);
        return view('mark.index',compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Mark.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nameclass = $request->input('name_class');
        $codeclass = $request->input('code_class');
        $namestudent = $request->input('name_student');
        $namesubject = $request->input('name_subject');
        $codesubject = $request->input('code_subject');
        $sks = $request->input('sks');
        $mark = $request -> input('mark');
        $grade = $request->input('grade');
        $data = new Mark();
        $data->name_class = $nameclass;
        $data->code_class = $codeclass;
        $data->name_student = $namestudent;
        $data->name_subject = $namesubject;
        $data->code_subject = $codesubject;
        $data->sks = $sks;
        $data->mark = $mark;
        $data->grade =$grade;
        $data->save();

        return redirect('/mark');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $marks = Mark::find($id);
        return view('mark.edit',compact('marks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nameclass = $request->input('name_class');
        $codeclass = $request->input('code_class');
        $namestudent = $request->input('name_student');
        $namesubject = $request->input('name_subject');
        $codesubject = $request->input('code_subject');
        $sks = $request->input('sks');
        $mark = $request -> input('mark');
        $grade = $request->input('grade');
        $data = $marks = Mark::find($id);
        $data->name_class = $nameclass;
        $data->code_class = $codeclass;
        $data->name_student = $namestudent;
        $data->name_subject = $namesubject;
        $data->code_subject = $codesubject;
        $data->sks = $sks;
        $data->mark = $mark;
        $data->grade =$grade;
        $data->save();

        return redirect('/mark');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marks = Mark::find($id);
        $marks->delete();

        return redirect('/mark');
    }
}
