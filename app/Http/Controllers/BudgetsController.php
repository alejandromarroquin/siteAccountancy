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
     * Consulta el último presupuesto registrado de la empresa que inicio sesión
     * y muestra la vista para registrar un nuevo presupuesto o consultar el último presupuesto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $budget=budgets::join('expenses','expenses.idBudget','=','budgets.id')->where('idAccountancy',session('idaccountancy'))->where('start',\DB::raw("(select max(`start`) from budgets)"))->get();
        $start='';
        $end='';
        $total=0;
        $reserved=0;
        $available=0;
        $idbudget=0;
        if(!empty($budget)){
          foreach ($budget as $data) {
            $idbudget=$data->id;
            $start=$data->start;
            $end=$data->end;
            $total=$data->total;
            $reserved=$reserved+$data->reserved;
          }
          $available=$total-$reserved;
        }
        return view('accountancy.budget.create',compact('budget','start','end','total','reserved','available','idbudget'));
    }

    /**
     * .
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
     * Registra en la base de datos los costos fijos y variables
     * y a partir de estos el presupuesto general.
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
     * Consulta los datos del último presupuesto registrado
     * y los muestra en la vista.
     *
     * @param  \App\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function edit($budgets)
    {
        $budget=budgets::join('expenses','budgets.id','=','expenses.idBudget')->select('start','end','type','concept','amount','category','purchases','total','budgets.id as idbudget','expenses.id as idexpense')->where('start',$budgets)->get();
        foreach ($budget as $data) {
          $idbudget=$data->idbudget;
          $start=$data->start;
          $end=$data->end;
          $total=$data->total;
        }
        return view('accountancy.budget.edit',compact('budget','start','end','total','idbudget'));
    }

    /**
     * Actualiza los datos del último presupuesto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $array_idexpensesfix=$request->idexpensefix;
        $array_idexpensesvar=$request->idexpensevar;
        $array_conceptfix=$request->conceptfix;
        $array_conceptvar=$request->conceptvar;
        $array_amountfix=$request->amountfix;
        $array_amountvar=$request->amountvar;
        $array_categoryfix=$request->categoryfix;
        $array_categoryvar=$request->categoryvar;
        $array_purchasesfix=$request->purchasesfix;
        $array_purchasesvar=$request->purchasesvar;
        $lengthidfix=count($array_idexpensesfix);
        $lengthidvar=count($array_idexpensesvar);
        $lengthfix=count($array_conceptfix);
        $lengthvar=count($array_conceptvar);
        DB::beginTransaction();
        try{
          $budget=budgets::find($request->idbudget);
          $budget->typebudget=$request->typebudget;
          $budget->start=$request->start;
          $budget->end=$request->end;
          $budget->total=floatval($request->total);
          $budget->save();
          for ($i=0; $i < $lengthidfix; $i++) {
            $expense=expense::find($array_idexpensesfix[$i]);
            $expense->concept=$array_conceptfix[$i];
            $expense->amount=$array_amountfix[$i];
            $expense->category=$array_categoryfix[$i];
            $expense->purchases=$array_purchasesfix[$i];
            $expense->save();
          }

          for ($i=$lengthidfix; $i < $lengthfix; $i++) {
            $newexpense=new expense;
            $newexpense->idBudget=$request->idbudget;
            $newexpense->concept=$array_conceptfix[$i];
            $newexpense->amount=$array_amountfix[$i];
            $newexpense->category=$array_categoryfix[$i];
            $newexpense->purchases=$array_purchasesfix[$i];
            $newexpense->reserved=0.00;
            $newexpense->type="1";
            $newexpense->save();
          }

          for ($i=0; $i < $lengthidvar; $i++) {
            $expense=expense::find($array_idexpensesvar[$i]);
            $expense->concept=$array_conceptvar[$i];
            $expense->amount=$array_amountvar[$i];
            $expense->category=$array_categoryvar[$i];
            $expense->purchases=$array_purchasesvar[$i];
            $expense->save();
          }

          for ($i=$lengthidvar; $i < $lengthvar; $i++) {
            $newexpense=new expense;
            $newexpense->idBudget=$request->idbudget;
            $newexpense->concept=$array_conceptvar[$i];
            $newexpense->amount=$array_amountvar[$i];
            $newexpense->category=$array_categoryvar[$i];
            $newexpense->purchases=$array_purchasesvar[$i];
            $newexpense->reserved=0.00;
            $newexpense->type="2";
            $newexpense->save();
          }
          DB::commit();
          return 1;
        }catch(\PDOException $e){
          DB::rollBack();
          return 0;
        }
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
