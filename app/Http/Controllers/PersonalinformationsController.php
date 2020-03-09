<?php

namespace App\Http\Controllers;

use App\personalinformations;
use Illuminate\Http\Request;

class PersonalinformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personalinformations  $personalinformations
     * @return \Illuminate\Http\Response
     */
    public function show(personalinformations $personalinformations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personalinformations  $personalinformations
     * @return \Illuminate\Http\Response
     */
    public function edit(personalinformations $personalinformations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personalinformations  $personalinformations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personalinformations $personalinformations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personalinformations  $personalinformations
     * @return \Illuminate\Http\Response
     */
    public function destroy(personalinformations $personalinformations)
    {
        //
    }
}
