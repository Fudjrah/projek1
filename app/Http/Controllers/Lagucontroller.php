<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lagucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semuaLagu = \App\Models\Lagu::all();

        return view('lagu.index', compact('semuaLagu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \App\Models\Lagu::create($request->all());

        return redirect()->route('lagu.index');
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
       $lagu = \App\Models\Lagu::findOrFail($id);
       
       return view('lagu.edit',compact('lagu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $lagu = \App\Models\Lagu::findOrFail($id);
       $lagu->update($request->all());

       return redirect()->route('lagu.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lagu = \App\Models\Lagu::findOrFail($id);
        $lagu->delete();

        return redirect()->route('lagu.index');
    }
}
