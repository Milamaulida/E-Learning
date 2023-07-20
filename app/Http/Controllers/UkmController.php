<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentactivities = Ukm::simplePaginate(10);
        return view('ukm.index', compact('studentactivities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Ukm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nameukm = $request->input('name_ukm');
        $typeukm = $request->input('type_ukm');
        $since = $request->input('since');
        $data = new Ukm();
        $data->name_ukm = $nameukm;
        $data->type_ukm = $typeukm;
        $data->since = $since;
         
        $data->save();
        return redirect('/ukm');

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
        $studentactivities = Ukm::find($id);
        return view('ukm.edit', compact('studentactivities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nameukm = $request->input('name_ukm');
        $typeukm = $request->input('type_ukm');
        $since = $request->input('since');
        $data = $studentactivities= Ukm ::find($id);
        $data->name_ukm = $nameukm;
        $data->type_ukm = $typeukm;
        $data->since = $since;
         
        $data->save();
        return redirect('/ukm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $studentactivities = Ukm::find($id);
        $studentactivities->delete();

        return redirect('/ukm');
    }
}
