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
    public function store(Request $request)
    {
          $budgets=new budgets;
          $idaccountancy=companie::join('users','companies.id','=','users.id')->join('accountancies','companies.id','=','accountancies.id')->select('accountancies.id');
          echo($idaccountancy);
          DB::beginTransaction();
          try{
            $budgets->idAccountancy=1;
            $budgets->concept=$request->concept;
            $budgets->amount=$request->amount;
            $budgets->save();
            DB::commit();
          }catch(\PDOException $e){
            DB::rollBack();
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
