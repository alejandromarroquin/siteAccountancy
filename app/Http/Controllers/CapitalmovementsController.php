<?php

namespace App\Http\Controllers;

use App\capitalmovements;
use Illuminate\Http\Request;
use App\accountancycatalogs;

class CapitalmovementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts=accountancycatalogs::join('accountcatalogs','accountancycatalogs.id','=','accountcatalogs.id')->join('accountancies','accountancycatalogs.idAccountancy','=','accountancies.id')->select('accountcatalogs.accountname','accountancycatalogs.id')->where('accountancies.idCompany',1)->get();
        return view('accountancy.capitalmovements.create',compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cashflow=new capitalmovements;
        if($request->flag==1){
          $debe=$request->amount;
          $haber=null;
        }else{
          $haber=$request->amount;
          $debe=null;
        }

        $cashflow->idAccountancyCatalog=$request->account;
        $cashflow->concep=$request->concept;
        $cashflow->debit=$debe;
        $cashflow->have=$haber;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\capitalmovements  $capitalmovements
     * @return \Illuminate\Http\Response
     */
    public function show(capitalmovements $capitalmovements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\capitalmovements  $capitalmovements
     * @return \Illuminate\Http\Response
     */
    public function edit(capitalmovements $capitalmovements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\capitalmovements  $capitalmovements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, capitalmovements $capitalmovements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\capitalmovements  $capitalmovements
     * @return \Illuminate\Http\Response
     */
    public function destroy(capitalmovements $capitalmovements)
    {
        //
    }
}
