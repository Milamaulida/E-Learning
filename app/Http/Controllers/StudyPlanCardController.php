<?php

namespace App\Http\Controllers;

use App\Models\StudyPlanCard;
use Illuminate\Http\Request;

class StudyPlanCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studyplancards = StudyPlanCard::simplePaginate(10);
        return view('studyplancard.index', compact('studyplancards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('StudyPlanCard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $namestudent = $request->input('name_student');
        $nim = $request->input('nim');
        $namesubject = $request->input('name_subject');
        $codesubject = $request->input('code_subject');
        $codeclass = $request->input('code_class');
        $sks = $request->input('sks');
        $data = new Studyplancard();
        $data->name_student = $namestudent;
        $data->nim = $nim;
        $data->name_subject = $namesubject;
        $data->code_subject = $codesubject;
        $data->code_class = $codeclass;
        $data->sks = $sks;
         
        $data->save();

        return redirect('/studyplancard');

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
        $studyplancards = StudyPlanCard::find($id);
        return view('studyplancard.edit', compact('studyplancards'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $namestudent = $request->input('name_student');
        $nim = $request->input('nim');
        $namesubject = $request->input('name_subject');
        $codesubject = $request->input('code_subject');
        $codeclass = $request->input('code_class');
        $sks = $request->input('sks');
        $data = $studyplancards= StudyPlanCard::find($id);
        $data->name_student = $namestudent;
        $data->nim = $nim;
        $data->name_subject = $namesubject;
        $data->code_subject = $codesubject;
        $data->code_class = $codeclass;
        $data->sks = $sks;
         
        $data->save();

        return redirect('/studyplancard');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studyplancards = StudyPlanCard::find($id);
        $studyplancards->delete();

        return redirect('/studyplancard');
    }
}
