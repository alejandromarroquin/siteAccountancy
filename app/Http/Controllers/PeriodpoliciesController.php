<?php

namespace App\Http\Controllers;

use App\periodpolicies;
use Illuminate\Http\Request;
use App\accountancycatalogs;

class PeriodpoliciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts=accountancycatalogs::join('accountcatalogs','accountancycatalogs.codeAccount','=','accountcatalogs.id')->join('accountancies','accountancycatalogs.idAccountancy','=','accountancies.id')->select('accountcatalogs.accountname','accountancycatalogs.id')->where('accountancies.idCompany',session('idcompany'))->get();
        return view('periodpolicies.create',compact('accounts'));
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
     * @param  \App\periodpolicies  $periodpolicies
     * @return \Illuminate\Http\Response
     */
    public function show(periodpolicies $periodpolicies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\periodpolicies  $periodpolicies
     * @return \Illuminate\Http\Response
     */
    public function edit(periodpolicies $periodpolicies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\periodpolicies  $periodpolicies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, periodpolicies $periodpolicies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\periodpolicies  $periodpolicies
     * @return \Illuminate\Http\Response
     */
    public function destroy(periodpolicies $periodpolicies)
    {
        //
    }
}
