<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timetables = Timetable::simplePaginate(10);
        return view('timetable.index', compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('timetable.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {
        $namesubject = $request->input('name_subject');
        $codesubject = $request->input('code_subject');
        $codeclass = $request->input('code_class');
        $data = new Timetable();
        $data->name_subject = $namesubject;
        $data->code_subject = $codesubject;
        $data->code_class = $codeclass;
         
        $data->save();

        return redirect('/timetable');

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
        $timetables = Timetable::find($id);
        return view('timetable.edit', compact('timetables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $namesubject = $request->input('name_subject');
        $codesubject = $request->input('code_subject');
        $codeclass = $request->input('code_class');
        $data = $timetables= Timetable::find($id);
        $data->name_subject = $namesubject;
        $data->code_subject = $codesubject;
        $data->code_class = $codeclass;
         
        $data->save();

        return redirect('/timetable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $timetables = Timetable::find($id);
        $timetables->delete();

        return redirect('/timetable');

    }
}
