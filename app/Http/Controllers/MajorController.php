<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::simplePaginate(10);
        return view('major.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Major.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $namemajor = $request->input('name_major');
        $headofprogram = $request->input('head_of_program');
        $codemajor = $request->input('code_major');
        $data = new Major();
        $data->name_major = $namemajor;
        $data->head_of_program = $headofprogram;
        $data->code_major = $codemajor;
                
        $data->save();
        return redirect('/major');

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
        $majors = Major::find($id);
        return view('major.edit', compact('majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $namemajor = $request->input('name_major');
        $headofprogram = $request->input('head_of_program');
        $codemajor = $request->input('code_major');
        $data = $majors = Major::find($id);
        $data->name_major = $namemajor;
        $data->head_of_program = $headofprogram;
        $data->code_major = $codemajor;
                
        $data->save();
        return redirect('/major');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $majors = Major::find($id);
        $majors->delete();

        return redirect('/major');
    }
}
