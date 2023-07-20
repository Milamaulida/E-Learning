<?php

namespace App\Http\Controllers;

use App\Models\ClassStudy;
use Illuminate\Http\Request;

class ClassStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classstudies = ClassStudy::simplePaginate(10);
        return view('classstudy.index', compact('classstudies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return view ('ClassStudy.create');
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nameclass = $request->input('name_class');
        $room = $request->input('room');
        $data = new Classstudy();
        $data->name_class = $nameclass;
        $data->room = $room;     
        $data->save();
        return redirect('/classstudy');

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
        $classstudies = ClassStudy::find($id);
        return view('classstudy.edit', compact('classstudies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nameclass = $request->input('name_class');
        $room = $request->input('room');
        $data = $classstudies = ClassStudy::find($id);
        $data->name_class = $nameclass;
        $data->room = $room;     
        $data->save();
        return redirect('/classstudy');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $classstudies = ClassStudy::find($id);
        $classstudies->delete();
        
        return redirect('/classstudy');
    }
    }
