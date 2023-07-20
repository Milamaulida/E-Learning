<?php

namespace App\Http\Controllers;

use App\Models\Rectorate;
use Illuminate\Http\Request;

class RectorateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rectorates = Rectorate::simplePaginate(10);
        return view('rectorate.index',compact('rectorates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Rectorate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $role = $request->input('role');
        $data = new Rectorate();
        $data->name = $name;
        $data->age = $age;
        $data->role = $role;
        $data->save();

        return redirect('/rectorate');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rectorate $rectorate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rectorates = Rectorate::find($id);
        return view('rectorate.edit',compact('rectorates'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $role = $request->input('role');
        $data = $rectorates = Rectorate::find($id);
        $data->name = $name;
        $data->age = $age;
        $data->role = $role;
        $data->save();

        return redirect('/rectorate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rectorates = Rectorate::find($id);
        $rectorates->delete();

        return redirect('/rectorate');
    }
}
