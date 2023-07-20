<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $billes = Bill::simplePaginate(10);
        return view('bill.index', compact('billes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Bill.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $namestudent = $request->input('name_student');
        $nim = $request->input('nim');
        $namemajor = $request->input('name_major');
        $nameclass = $request->input('name_class');
        $theamountofthebill = $request->input('the_amount_of_the_bill');
        $data = new Bill();
        $data->name_student = $namestudent;
        $data->nim = $nim;
        $data->name_major = $namemajor;
        $data->name_class = $nameclass;
        $data->the_amount_of_the_bill = $theamountofthebill;
        $data->save();
        return redirect('/bill');

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
        $billes = Bill::find($id);
        return view('bill.edit', compact('billes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $namestudent = $request->input('name_student');
        $nim = $request->input('nim');
        $namemajor = $request->input('name_major');
        $nameclass = $request->input('name_class');
        $theamountofthebill = $request->input('the_amount_of_the_bill');
        $data = $billes = Bill::find($id);
        $data->name_student = $namestudent;
        $data->nim = $nim;
        $data->name_major = $namemajor;
        $data->name_class = $nameclass;
        $data->the_amount_of_the_bill = $theamountofthebill;
        $data->save();
        return redirect('/bill');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $billes = Bill::find($id);
        $billes->delete();
        
        return redirect('/bill');
    }
}
