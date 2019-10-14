<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Redirect;
use DB;
use Input;
use Storage;

class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('users.company.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phones=Phones::all();
        return view('users.company.create',compact('phone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phones=new Phone;
        $phones->office=$request->phoneofficet;
        $phones->extension=$request->extensiont;
        $phones->cellphone=$request->cellphonet;
        if($phones->save()){
          return $phones->id;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function show(phones $phones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phones=phones::all();
        return view('users.company.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phones $phones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phones  $phones
     * @return \Illuminate\Http\Response
     */
    public function destroy(phones $phones)
    {
        //
    }
}
