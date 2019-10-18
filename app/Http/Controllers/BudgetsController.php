<?php

namespace App\Http\Controllers;

use App\budgets;
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
        //
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
