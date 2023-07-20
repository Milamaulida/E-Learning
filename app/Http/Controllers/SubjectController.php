<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::simplepaginate(10);
        return view('subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $namesubject = $request->input('name_subject');
        $codesubject = $request->input('code_subject');
        $sks = $request->input('sks');
        $description = $request->input('description');
        $data = new Subject();
        $data->name_subject = $namesubject;
        $data->code_subject = $codesubject;
        $data->sks = $sks;
        $data->description = $description;
         
        $data->save();

        return redirect('/subject');

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
        $subjects = Subject::find($id);
        return view('subject.edit', compact('subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $namesubject = $request->input('name_subject');
        $codesubject = $request->input('code_subject');
        $sks = $request->input('sks');
        $description = $request->input('description');
        $data = $subjects= Subject::find($id);
        $data->name_subject = $namesubject;
        $data->code_subject = $codesubject;
        $data->sks = $sks;
        $data->description = $description;
         
        $data->save();

        return redirect('/subject');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subjects = Subject::find($id);
        $subjects->delete();

        return redirect('/subject');
    }
}
