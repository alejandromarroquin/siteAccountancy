<?php

namespace App\Http\Controllers;

use App\budgets;
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
          $budgets=new budgets;
          $idaccountancy=companie::join('users','companies.id','=','users.id')->join('accountancies','companies.id','=','accountancies.id')->select('accountancies.id');
          DB::beginTransaction();
          try{
            $budgets->idAccountancy=session('idaccountancy');
            $budgets->concept=$request->concept;
            $budgets->amount=$request->amount;
            $budgets->save();
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
