<?php

namespace App\Http\Controllers;

use App\capitalmovements;
use Illuminate\Http\Request;
use App\accountancycatalogs;
use App\debits;
use App\credits;
use DB;

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
        $accounts=accountancycatalogs::join('accountcatalogs','accountancycatalogs.codeAccount','=','accountcatalogs.id')->join('accountancies','accountancycatalogs.idAccountancy','=','accountancies.id')->select('accountcatalogs.accountname','accountancycatalogs.id')->where('accountancies.idCompany',session('idcompany'))->get();
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
        $credit=new credits;
        $debit=new debits;
        DB::beginTransaction();
        try {
          $credit->idAccountancyCatalog=$request->accountcredit;
          $credit->amount=$request->amount;
          $credit->save();

          $debit->idAccountancyCatalog=$request->accountdebit;
          $debit->amount=$request->amount;
          $debit->save();

          $cashflow->idcredit=$credit->id;
          $cashflow->iddebit=$debit->id;
          $cashflow->concept=$request->concept;
          $cashflow->save();
          DB::commit();
        } catch (\PDOException $e) {
          DB::rollBack();
        }
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
