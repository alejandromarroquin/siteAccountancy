<?php

namespace App\Http\Controllers;

use App\cashflow;
use Illuminate\Http\Request;
use App\accountancycatalogs;
use App\debits;
use App\credits;
use App\Subaccount;
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
        //https://economipedia.com/definiciones/flujo-de-efectivo.html
    }

    /**
     * Show the form for creating a new resourc.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts=DB::select('select Distinct accountName,code from accountancycatalogs inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where accountancycatalogs.idaccountancy='.session('idaccountancy'));
        return view('accountancy.capitalmovements.create',compact('accounts'));
    }

    /**
     * Consulta las subcuentas que pertenezcan a la cuenta
     * seleccionada por el usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consultSubaccount(Request $request)
    {
        $accounts=Subaccount::join('accountancycatalogs','subaccounts.idaccount','=','accountancycatalogs.id')->join('accountcatalogs','accountancycatalogs.CodeAccount','=','accountcatalogs.id')->select('subaccounts.id','namesubaccount')->where('accountcatalogs.code',$request->elegido)->get();
        echo "<option selected hidden>Selecciona una subcuenta...</option>";
        foreach($accounts as $account){
            echo "<option value=".$account->id.">".$account->namesubaccount."</option>";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cashflow=new cashflow;
        DB::beginTransaction();
        try{
          $cashflow->idsubaccountdeb=$request->accountdebit;
          $cashflow->idsubaccountcred=$request->accountcredit;
          $cashflow->date=$request->date;
          $cashflow->typeflow=$request->typeflow;
          $cashflow->activity=$request->activity;
          $cashflow->concept=$request->concept;
          $cashflow->amount=$request->amount;
          $cashflow->save();

          DB::commit();
          return 1;
        }catch(\PDOException $e){
          DB::rollBack();
          return 0;
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
