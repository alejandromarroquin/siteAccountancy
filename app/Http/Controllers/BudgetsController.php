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
        $budget=budgets::join('expenses','expenses.idBudget','=','budgets.id')->where('idAccountancy',session('idaccountancy'))->where('start',\DB::raw("(select max(`start`) from budgets)"))->get();
        $start='';
        $end='';
        $total='';
        $reserved=0;
        $available=0;
        if(!empty($budget)){
          foreach ($budget as $data) {
            $start=$data->start;
            $end=$data->end;
            $total=$data->total;
            $reserved=$reserved+$data->reserved;
          }
          $available=$total-$reserved;
        }
        return view('accountancy.budget.create',compact('budget','start','end','total','reserved','available'));
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
    public function store(Request $request)
    {
      $budget=new budgets;
      $array_conceptfix=$request->conceptfix;
      $array_amountfix=$request->amountfix;
      $array_categoryfix=$request->categoryfix;
      $array_purchasesfix=$request->purchasesfix;
      $array_conceptvar=$request->conceptvar;
      $array_amountvar=$request->amountvar;
      $array_categoryvar=$request->categoryvar;
      $array_purchasesvar=$request->purchasesvar;
      $longitudfix=count($array_conceptfix);
      $longitudvar=count($array_conceptvar);

      DB::beginTransaction();
      try{
        $budget->idAccountancy=session('idaccountancy');
        $budget->typebudget=$request->typebudget;
        $budget->start=$request->start;
        $budget->end=$request->end;
        $budget->total=$request->total;
        $budget->save();

        for ($i=0; $i < $longitudfix; $i++) {
          $expenses=new expense;
          $expenses->idBudget=$budget->id;
          $expenses->concept=$array_conceptfix[$i];
          $expenses->amount=$array_amountfix[$i];
          $expenses->category=$array_categoryfix[$i];
          $expenses->purchases=$array_purchasesfix[$i];
          $expenses->reserved=0.00;
          $expenses->type="1";
          $expenses->save();
        }

        for ($i=0; $i < $longitudvar; $i++) {
          $expenses=new expense;
          $expenses->idBudget=$budget->id;
          $expenses->concept=$array_conceptvar[$i];
          $expenses->amount=$array_amountvar[$i];
          $expenses->category=$array_categoryvar[$i];
          $expenses->purchases=$array_purchasesvar[$i];
          $expenses->reserved=0.00;
          $expenses->type="2";
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
