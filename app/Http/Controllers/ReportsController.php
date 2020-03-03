<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\accountancie;
use App\capitalmovements;
use App\cashflow;
use DB;

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
     * Genera el balance general.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generateBalancesheet(Request $request)
    {
        $inititaldate=$request->initaldate;
        $finaldate=$request->finaldate;
        $accountsname=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $activos=DB::select('select accountName,sum(amount) as sumcred from accountancycatalogs inner join cashflows cashdeb on cashdeb.idaccountancycreditor=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id GROUP BY accountName');
        $pasivos=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join cashflows cashdeb on cashdeb.idaccountancydebtor=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where concept!="Aportación a capital" GROUP BY accountName');
        $capital=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join cashflows cashdeb on cashdeb.idaccountancydebtor=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where concept="Aportación a capital" GROUP BY accountName');
        $sumact=0;
        return view('reports/balancesheet',compact('accountsname','company','activos','pasivos','capital','sumact'));
    }

    //Descarga el balance general
    public function downloadBalancesheet($initialdate,$finaldate,$businessname){

      $pdf = \PDF::loadView('reports.balancesheetPDF');
      return $pdf->download();

    }
    //Genera el estado de resultados.
    public function generateStatementresult(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        return view('reports/statementresult',compact('company'));
    }

    //Descarga el estado de resultados
    public function downloadStatementresult(){
      $pdf = \PDF::loadView('reports.statementresultPDF');
      return $pdf->download();
    }

    //Genera la balanza de comprobación.
    public function generateTrialbalance(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $cashflow=capitalmovements::join('accountancycatalogs','capitalmovements.idAccountancyCatalog','=','accountancycatalogs.id')->get();
        //$data=cashflow::join('accountancycatalogs','cashflows.idaccountancydebtor','=','accountancycatalogs.id')->join('accountcatalogs','accountancycatalogs.CodeAccount','=','accountcatalogs.id')->get();
        $accountsname=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
        $accountdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join cashflows cashdeb on cashdeb.idaccountancydebtor=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id GROUP BY accountName');
        $accountcreds=DB::select('select accountName,sum(amount) as sumcred from accountancycatalogs inner join cashflows cashdeb on cashdeb.idaccountancycreditor=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id GROUP BY accountName');
        $arrayaccountd=array();
        foreach ($accountdebs as $accountdeb) {
          $arrayaccountd[$accountdeb->accountName]=$accountdeb->sumamount;
        }
        $arrayaccountc=array();
        foreach ($accountcreds as $accountcred) {
          $arrayaccountc[$accountcred->accountName]=$accountcred->sumcred;
        }
        $cont=0;
        $summd=0;
        $summa=0;
        $sumsd=0;
        $sumsa=0;
        return view('reports/trialbalance',compact('cont','summd','summa','sumsd','sumsa','company','accountsname','arrayaccountd','arrayaccountc'));
    }


    public function downloadTrialbalance(){
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $cashflow=capitalmovements::join('accountancycatalogs','capitalmovements.idAccountancyCatalog','=','accountancycatalogs.id')->get();
      //$data=cashflow::join('accountancycatalogs','cashflows.idaccountancydebtor','=','accountancycatalogs.id')->join('accountcatalogs','accountancycatalogs.CodeAccount','=','accountcatalogs.id')->get();
      $accountsname=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
      $accountdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join cashflows cashdeb on cashdeb.idaccountancydebtor=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id GROUP BY accountName');
      $accountcreds=DB::select('select accountName,sum(amount) as sumcred from accountancycatalogs inner join cashflows cashdeb on cashdeb.idaccountancycreditor=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id GROUP BY accountName');
      $arrayaccountd=array();
      foreach ($accountdebs as $accountdeb) {
        $arrayaccountd[$accountdeb->accountName]=$accountdeb->sumamount;
      }
      $arrayaccountc=array();
      foreach ($accountcreds as $accountcred) {
        $arrayaccountc[$accountcred->accountName]=$accountcred->sumcred;
      }
      $cont=0;
      $summd=0;
      $summa=0;
      $sumsd=0;
      $sumsa=0;
      foreach ($accountsname as $dta) {
        if(array_key_exists($dta->accountName,$arrayaccountd)){
          $summd=$summd+$arrayaccountd[$dta->accountName];
        }
        if(array_key_exists($dta->accountName,$arrayaccountc)){
          $summa=$summa+$arrayaccountc[$dta->accountName];
        }
        if(array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc)){
          if($arrayaccountd[$dta->accountName]>$arrayaccountc[$dta->accountName]){
            $sumsd=$sumsd+$arrayaccountd[$dta->accountName]-$arrayaccountc[$dta->accountName];
          }
        }else{
          if(!array_key_exists($dta->accountName,$arrayaccountc)){
            $sumsd=$sumsd+$arrayaccountd[$dta->accountName];
          }
        }
        if(array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc)){
          if($arrayaccountd[$dta->accountName]<$arrayaccountc[$dta->accountName]){
            $sumsa=$sumsa+$arrayaccountc[$dta->accountName]-$arrayaccountd[$dta->accountName];
          }
        }else{
          if(!array_key_exists($dta->accountName,$arrayaccountd)){
            $sumsa=$sumsa+$arrayaccountc[$dta->accountName];
          }
        }
      }

      $pdf = \PDF::loadView('reports.trialbalancePDF',compact('cont','summd','summa','sumsd','sumsa','company','accountsname','arrayaccountd','arrayaccountc'));
      return $pdf->download();
    }

    //Genera el flujo de efectivo.
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
