<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\accountancie;
use App\capitalmovements;

class ReportsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexGenerateReports()
    {
        return view('reports/indexGenerate');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexConsultReports()
    {
        return view('reports/indexConsult');
    }

    /**
     * Generate Balancesheet a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generateBalancesheet(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        return view('reports/balancesheet',compact('company'));
    }

    public function generateStatementresult(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        return view('reports/statementresult',compact('company'));
    }

    public function generateTrialbalance(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $cashflow=capitalmovements::join('accountancycatalogs','capitalmovements.idAccountancyCatalog','=','accountancycatalogs.id')->get();

        return view('reports/trialbalance',compact('company'));
    }

    public function generateCashflow(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        return view('reports/cashflow',compact('company'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
