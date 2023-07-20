<?php

namespace App\Http\Controllers;

use App\Models\StudentsAssociation;
use Illuminate\Http\Request;

class StudentsAssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentsassociations= StudentsAssociation::simplePaginate(10);
        return view('studentsassociation.index',compact('studentsassociations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('StudentsAssociation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nameset = $request->input('name_set');
        $nameheadofset = $request->input('name_head_of_set');
        $data = new StudentsAssociation();
        $data->name_set = $nameset;
        $data->name_head_of_set = $nameheadofset;
        $data->save();

        return redirect('/studentsassociation');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentsAssociation $studentsAssociation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studentsassociations= StudentsAssociation::find($id);
        return view('studentsassociation.edit',compact('studentsassociations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nameset = $request->input('name_set');
        $nameheadofset = $request->input('name_head_of_set');
        $data = $studentsassociation= StudentsAssociation::find($id);
        $data->name_set = $nameset;
        $data->name_head_of_set = $nameheadofset;
        $data->save();

        return redirect('/studentsassociation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $studentsassociations= StudentsAssociation::find($id);
        $studentsassociations->delete();

        return redirect('/studentsassociation');
    }
}
