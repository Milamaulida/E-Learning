<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = Lecturer::simplePaginate(10);
        return view('lecturer.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Lecturer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $name = $request->input('name');
        $nidn = $request->input('nidn');
        $age = $request->input('age');
        $role = $request->input('role');
        $gender = $request->input('gender');
        $religion = $request->input('religion');
        $email = $request->input('email');
        $nophone = $request->input('no_phone');
        $address = $request->input('address');
        $data = new Lecturer();
        $data->name = $name;
        $data->nidn = $nidn;
        $data->age = $age;
        $data->role = $role;
        $data->gender = $gender;
        $data->religion = $religion;
        $data->email = $email;
        $data->no_phone = $nophone;
        $data->address = $address;
                
        $data->save();
        return redirect('/lecturer');

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
    public function edit($id)
    {
        $lecturers = Lecturer::find($id);
        return view('lecturer.edit', compact('lecturers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $nidn = $request->input('nidn');
        $age = $request->input('age');
        $role = $request->input('role');
        $gender = $request->input('gender');
        $religion = $request->input('religion');
        $email = $request->input('email');
        $nophone = $request->input('no_phone');
        $address = $request->input('address');
        $data = $lecturers = Lecturer::find($id);
        $data->name = $name;
        $data->nidn = $nidn;
        $data->age = $age;
        $data->role = $role;
        $data->gender = $gender;
        $data->religion = $religion;
        $data->email = $email;
        $data->no_phone = $nophone;
        $data->address = $address;
                
        $data->save();
        return redirect('/lecturer');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lecturers = Lecturer::find($id);
        $lecturers->delete();

        return redirect('/lecturer');
    }
}
