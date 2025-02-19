<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\court;

class courtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mcourt()
    {
        return view('mcourt');
    }

    public function index()
    {
        $courts = court::all();
        //return $courts;
       // dd($courts); 
        return view('mcourt', compact('courts'));
        
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
