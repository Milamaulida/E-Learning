<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::simplePaginate(10);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $name = $request->input('name');
        $nim = $request->input('nim');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $religion = $request->input('religion');
        $email = $request->input('email');
        $nophone = $request -> input('no_phone');
        $address = $request->input('address');
        $data = new Student();
        $data->name = $name;
        $data->nim = $nim;
        $data->age = $age;
        $data->gender = $gender;
        $data->religion = $religion;
        $data->email = $email;
        $data->no_phone = $nophone;
        $data->address =$address;
        $data->save();

        return redirect('/student');

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
        $students = Student::find($id);
        return view('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $nim = $request->input('nim');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $religion = $request->input('religion');
        $email = $request->input('email');
        $nophone = $request -> input('no_phone');
        $address = $request->input('address');
        $data = $students= Student::find($id);
        $data->name = $name;
        $data->nim = $nim;
        $data->age = $age;
        $data->gender = $gender;
        $data->religion = $religion;
        $data->email = $email;
        $data->no_phone = $nophone;
        $data->address =$address;
        $data->save();

        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();

        return redirect('/student');
    }
}
