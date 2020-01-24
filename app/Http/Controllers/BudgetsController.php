<?php

namespace App\Http\Controllers;

use App\budgets;
use App\expense;
use App\companie;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BudgetsController extends Controller
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
        return view('accountancy.budget.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consultAmount(Request $request)
    {
        $amount=budgets::select('amount')->where('id',$request->elegido)->get();
        foreach($amount as $data){
          $amount=$data->amount;
        }
        return $amount;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consultBudgets(Request $request){
        $budgets=budgets::select('id','concept')->where('idAccountancy',session('idaccountancy'))->get();
        echo "<option selected hidden>Selecciona una subcuenta...</option>";
        foreach($budgets as $budget){
            echo "<option value=".$budget->id.">".$budget->concept."</option>";
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
      $budget=new budgets;
      $array_conceptfix=$request->conceptfix;
      $array_amountfix=$request->amountfix;
      $array_categoryfix=$request->categoryfix;
      $array_conceptvar=$request->conceptvar;
      $array_amountvar=$request->amountvar;
      $longitudfix=count($array_conceptfix);
      $longitudvar=count($array_conceptvar);

      DB::beginTransaction();
      try{
        $budget->idAccountancy=session('idaccountancy');
        $budget->typebudget=$request->typebudget;
        $budget->start=$request->start;
        $budget->end=$request->end;
        $budget->amount=$request->total;
        $budget->save();

        for ($i=0; $i < $longitudfix; $i++) {
          $expenses=new expense;
          $expenses->idBudget=$budget->id;
          $expenses->concept=$array_conceptfix[$i];
          $expenses->amount=$array_amountfix[$i];
          $expenses->purchases=1;
          $expenses->save();
          //return $array_categoryfix[$i];
        }

        for ($i=0; $i < $longitudvar; $i++) {
          $expenses=new expense;
          $expenses->idBudget=$budget->id;
          $expenses->concept=$array_conceptvar[$i];
          $expenses->amount=$array_amountvar[$i];
          $expenses->purchases=1;
          $expenses->save();
        }

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
     * @param  \App\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function show(budgets $budgets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function edit(budgets $budgets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, budgets $budgets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function destroy(budgets $budgets)
    {
        //
    }
}
