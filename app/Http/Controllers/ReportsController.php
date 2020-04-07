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
     * Consulta los flujos que pertenezcan a la cuenta
     * seleccionada por el usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consultFlows(Request $request)
    {
        $saldo=0;
        $flowsd=DB::select('select typeflow,date,concept,amount from cashflows inner join subaccounts on cashflows.idsubaccountdeb=subaccounts.id where namesubaccount="'.$request->elegido.'"');
        $flowsc=DB::select('select typeflow,date,concept,amount from cashflows inner join subaccounts on cashflows.idsubaccountcred=subaccounts.id where namesubaccount="'.$request->elegido.'"');
        echo '<tr><th class="date">Fecha</th><th class="reference">Referencia</th><th>Detalle</th><th>Débito</th><th>Crédito</th></tr>';
        foreach($flowsd as $flowsd){
          if ($flowsd->typeflow=="Ingreso") {
            $saldo=$flowsd->amount+$saldo;
            echo '<tr><th class="date">'.$flowsd->date.'</th><th class="reference">Referencia</th><th>'.$flowsd->concept.'</th><th>'.$flowsd->amount.'</th><th></th></tr>';
          }else{
            if($flowsd->typeflow=="Egreso"){
              $saldo=$saldo-$flowsd->amount;
              echo '<tr><th class="date">'.$flowsd->date.'</th><th class="reference">Referencia</th><th>'.$flowsd->concept.'</th><th></th><th>'.$flowsd->amount.'</th></tr>';
            }
          }
        }
        foreach($flowsc as $flowsc){
          if ($flowsc->typeflow=="Ingreso") {
            $saldo=$flowsc->amount+$saldo;
            echo '<tr><th class="date">'.$flowsc->date.'</th><th class="reference">Referencia</th><th>'.$flowsc->concept.'</th><th>'.$flowsc->amount.'</th><th></th></tr>';
          }else{
            if($flowsc->typeflow=="Egreso"){
              $saldo=$saldo-$flowsc->amount;
              echo '<tr><th class="date">'.$flowsc->date.'</th><th class="reference">Referencia</th><th>'.$flowsc->concept.'</th><th></th><th>'.$flowsc->amount.'</th></tr>';
            }
          }
        }
        echo '<tr><th class="date"></th><th class="reference"></th><th></th><th>Saldo</th><th>'.$saldo.'</th></tr>';
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
     * Entradas: Request con la fecha inicio y fin
     * Salidas: Retorna vista
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generateBalancesheet(Request $request)
    {
        $accountsname=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $activos=DB::select('select accountName,sum(amount) as sumcred from subaccounts inner join cashflows cashdeb on cashdeb.idsubaccountcred=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id GROUP BY accountName');
        $pasivos=DB::select('select accountName,sum(amount) as sumamount from subaccounts inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity!="Inversión" GROUP BY accountName');
        $capital=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join cashflows cashdeb on cashdeb.idsubaccountdeb=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Inversión" GROUP BY accountName');
        $sumact=0;
        $sumactpas=0;
        return view('reports/balancesheet',compact('accountsname','company','activos','pasivos','capital','sumact','sumactpas'));
    }

    //Descarga el balance general
    //Entradas: Fecha inicio, fecha fin y razon social
    //Salidas: Descarga de PDF
    public function downloadBalancesheet(Request $request){
      $datetoday=$request->datetoday;
      $accountsname=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $activos=DB::select('select accountName,sum(amount) as sumcred from subaccounts inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id GROUP BY accountName');
      $pasivos=DB::select('select accountName,sum(amount) as sumamount from subaccounts inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where concept!="Aportación a capital" GROUP BY accountName');
      $capital=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join cashflows cashdeb on cashdeb.idsubaccountdeb=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where concept="Aportación a capital" GROUP BY accountName');
      $sumact=0;
      $sumpas=0;
      $sumcap=0;
      foreach($activos as $activo){
        $sumact=$sumact+$activo->sumcred;
      }
      foreach($pasivos as $pasivo){
        $sumpas=$sumpas+$pasivo->sumamount;
      }
      foreach($capital as $cap){
       $sumcap=$sumcap+$cap->sumamount;
      }
      $pdf = \PDF::loadView('reports.balancesheetPDF',compact('accountsname','company','activos','pasivos','capital','sumact','sumpas','sumcap','datetoday'));
      return $pdf->download();
    }
    //Genera el estado de resultados.
    public function generateStatementresult(Request $request)
    {
        $initaldate=$request->initaldate;
        $finaldate=$request->finaldate;
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
        $sales=DB::select('select accountcatalogs.accountName,sum(amount) as sumsales from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id inner join accounts on accountcatalogs.idgrouperaccount=accounts.groupcode inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows on subaccounts.id=cashflows.idsubaccountcred where accounts.groupcode>400 AND accounts.groupcode<500 GROUP BY accountName');
        $costs=DB::select('select accountcatalogs.accountName,sum(amount) as sumcosts from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id inner join accounts on accountcatalogs.idgrouperaccount=accounts.groupcode inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows on subaccounts.id=cashflows.idsubaccountdeb where accounts.groupcode>500 AND accounts.groupcode<600 GROUP BY accountName');
        $expenses=DB::select('select accountcatalogs.accountName,sum(amount) as sumexpenses from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id inner join accounts on accountcatalogs.idgrouperaccount=accounts.groupcode inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows on subaccounts.id=cashflows.idsubaccountdeb where accounts.groupcode=602 OR accounts.groupcode=603 OR accounts.groupcode=701 OR accounts.groupcode=703 GROUP BY accountName');
        $taxes=DB::select('select accountcatalogs.accountName,sum(amount) as sumtaxes from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id inner join accounts on accountcatalogs.idgrouperaccount=accounts.groupcode inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows on subaccounts.id=cashflows.idsubaccountcred where accounts.groupcode=602 OR accounts.groupcode=603 OR accounts.groupcode=701 OR accounts.groupcode=703 GROUP BY accountName');
        $arraysales=array();
        foreach ($sales as $sale) {
          $arraysales[$sale->accountName]=$sale->sumsales;
        }
        $arraycosts=array();
        foreach ($costs as $cost) {
          $arraycosts[$cost->accountName]=$cost->sumcosts;
        }
        $arrayexpenses=array();
        foreach ($expenses as $expense) {
          $arrayexpenses[$expense->accountName]=$expense->sumexpenses;
        }
        $totalsales=0;
        $totalcosts=0;
        $grossprofit=0;
        $totalexpenses=0;
        return view('reports/statementresult',compact('company','arraysales','arraycosts','arrayexpenses','accountnames','totalsales','totalcosts','grossprofit','totalexpenses','initaldate','finaldate'));
    }

    //Descarga el estado de resultados
    public function downloadStatementresult(Request $request){
      $initaldate=$request->initaldate;
      $finaldate=$request->finaldate;
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
      $sales=DB::select('select accountcatalogs.accountName,sum(amount) as sumsales from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id inner join accounts on accountcatalogs.idgrouperaccount=accounts.groupcode inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows on subaccounts.id=cashflows.idsubaccountcred where accounts.groupcode>400 AND accounts.groupcode<500 GROUP BY accountName');
      $costs=DB::select('select accountcatalogs.accountName,sum(amount) as sumcosts from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id inner join accounts on accountcatalogs.idgrouperaccount=accounts.groupcode inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows on subaccounts.id=cashflows.idsubaccountdeb where accounts.groupcode>500 AND accounts.groupcode<600 GROUP BY accountName');
      $expenses=DB::select('select accountcatalogs.accountName,sum(amount) as sumexpenses from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id inner join accounts on accountcatalogs.idgrouperaccount=accounts.groupcode inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows on subaccounts.id=cashflows.idsubaccountdeb where accounts.groupcode=602 OR accounts.groupcode=603 OR accounts.groupcode=701 OR accounts.groupcode=703 GROUP BY accountName');
      $taxes=DB::select('select accountcatalogs.accountName,sum(amount) as sumtaxes from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id inner join accounts on accountcatalogs.idgrouperaccount=accounts.groupcode inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows on subaccounts.id=cashflows.idsubaccountcred where accounts.groupcode=602 OR accounts.groupcode=603 OR accounts.groupcode=701 OR accounts.groupcode=703 GROUP BY accountName');
      $arraysales=array();
      foreach ($sales as $sale) {
        $arraysales[$sale->accountName]=$sale->sumsales;
      }
      $arraycosts=array();
      foreach ($costs as $cost) {
        $arraycosts[$cost->accountName]=$cost->sumcosts;
      }
      $arrayexpenses=array();
      foreach ($expenses as $expense) {
        $arrayexpenses[$expense->accountName]=$expense->sumexpenses;
      }
      $totalsales=0;
      $totalcosts=0;
      $grossprofit=0;
      $totalexpenses=0;
      foreach ($accountnames as $accountname) {
        if(array_key_exists($accountname->accountName,$arraysales)){
          $totalsales=$totalsales+$arraysales[$accountname->accountName];
        }
        if(array_key_exists($accountname->accountName,$arraycosts)){
          $totalcosts=$totalcosts+$arraycosts[$accountname->accountName];
        }
        if(array_key_exists($accountname->accountName,$arrayexpenses)){
          $totalexpenses=$totalexpenses+$arrayexpenses[$accountname->accountName];
        }

      }
      $grossprofit=$totalsales-$totalcosts;
      $utilitybeforetaxes=$grossprofit-$totalexpenses;
      $incometaxes=$utilitybeforetaxes*.32;
      $netprofit=$utilitybeforetaxes-$incometaxes;
      $pdf = \PDF::loadView('reports.statementresultPDF',compact('company','arraysales','arraycosts','arrayexpenses','accountnames','totalsales','totalcosts','grossprofit','totalexpenses','utilitybeforetaxes','incometaxes','netprofit','initaldate','finaldate'));
      return $pdf->download();
    }

    //Genera la balanza de comprobación.
    public function generateTrialbalance(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $accountsname=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where accountancycatalogs.idAccountancy='.session("idaccountancy"));
        $accountdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $accountcreds=DB::select('select accountName,sum(amount) as sumcred from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
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


    public function downloadTrialbalance(Request $request){
      $datetoday=$request->datetoday;
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $accountsname=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where accountancycatalogs.idAccountancy='.session("idaccountancy"));
      $accountdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $accountcreds=DB::select('select accountName,sum(amount) as sumcred from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
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
          if(!array_key_exists($dta->accountName,$arrayaccountc) && array_key_exists($dta->accountName,$arrayaccountd)){
            $sumsd=$sumsd+$arrayaccountd[$dta->accountName];
          }
        }
        if(array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc)){
          if($arrayaccountd[$dta->accountName]<$arrayaccountc[$dta->accountName]){
            $sumsa=$sumsa+$arrayaccountc[$dta->accountName]-$arrayaccountd[$dta->accountName];
          }
        }else{
          if(!array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc)){
            $sumsa=$sumsa+$arrayaccountc[$dta->accountName];
          }
        }
      }

      $pdf = \PDF::loadView('reports.trialbalancePDF',compact('cont','summd','summa','sumsd','sumsa','company','accountsname','arrayaccountd','arrayaccountc','datetoday'));
      return $pdf->download();
    }

    //Genera la póliza de periodos.
    public function generatePeriodPoliciesincome(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
        $policiesdeb=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
        $sumdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $policiescred=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountcred=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
        $sumcreds=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $policiesperioddeb=array();
        foreach ($policiesdeb as $policiedeb) {
          $policiesperioddeb[$policiedeb->namesubaccount]=$policiedeb->accountName;
        }
        $policiesperiodcred=array();
        foreach ($policiescred as $policiecred) {
          $policiesperiodcred[$policiecred->namesubaccount]=$policiecred->accountName;
        }
        $arraysumcreds=array();
        foreach ($sumcreds as $sumcred) {
          $arraysumcreds[$sumcred->accountName]=$sumcred->sumamount;
        }
        $arraysumdebs=array();
        foreach ($sumdebs as $sumdeb) {
          $arraysumdebs[$sumdeb->accountName]=$sumdeb->sumamount;
        }
        $sumd=0;
        foreach ($sumdebs as $sumdeb) {
          $sumd=$sumd+$sumdeb->sumamount;
        }
        $accountname='';
        $subaccountname='';
        $sum=0;
        return view('reports.periodpoliciesincome',compact('company','policiesdeb','policiescred','accountnames','policiesperioddeb','policiesperiodcred','accountname','subaccountname','sum','sumd','arraysumcreds','arraysumdebs'));
    }

    public function downloadPeriodpolicieincome(Request $request){
      $datetoday=$request->datetoday;
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
      $policiesdeb=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
      $sumdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $policiescred=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountcred=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
      $sumcreds=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $policiesperioddeb=array();
      foreach ($policiesdeb as $policiedeb) {
        $policiesperioddeb[$policiedeb->namesubaccount]=$policiedeb->accountName;
      }
      $policiesperiodcred=array();
      foreach ($policiescred as $policiecred) {
        $policiesperiodcred[$policiecred->namesubaccount]=$policiecred->accountName;
      }
      $arraysumcreds=array();
      foreach ($sumcreds as $sumcred) {
        $arraysumcreds[$sumcred->accountName]=$sumcred->sumamount;
      }
      $arraysumdebs=array();
      foreach ($sumdebs as $sumdeb) {
        $arraysumdebs[$sumdeb->accountName]=$sumdeb->sumamount;
      }
      $sumd=0;
      foreach ($sumdebs as $sumdeb) {
        $sumd=$sumd+$sumdeb->sumamount;
      }
      $accountname='';
      $subaccountname='';
      $sum=0;
      $pdf = \PDF::loadView('reports.periodpoliciesincomePDF',compact('company','policiesdeb','policiescred','accountnames','policiesperioddeb','policiesperiodcred','accountname','subaccountname','sum','sumd','arraysumcreds','arraysumdebs'));
      return $pdf->download();
    }

    //Genera la póliza de periodos.
    public function generatePeriodPoliciesexpenses(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
        $policiesdeb=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
        $sumdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $policiescred=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountcred=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
        $sumcreds=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $policiesperioddeb=array();
        foreach ($policiesdeb as $policiedeb) {
          $policiesperioddeb[$policiedeb->namesubaccount]=$policiedeb->accountName;
        }
        $policiesperiodcred=array();
        foreach ($policiescred as $policiecred) {
          $policiesperiodcred[$policiecred->namesubaccount]=$policiecred->accountName;
        }
        $arraysumcreds=array();
        foreach ($sumcreds as $sumcred) {
          $arraysumcreds[$sumcred->accountName]=$sumcred->sumamount;
        }
        $arraysumdebs=array();
        foreach ($sumdebs as $sumdeb) {
          $arraysumdebs[$sumdeb->accountName]=$sumdeb->sumamount;
        }
        $sumd=0;
        foreach ($sumdebs as $sumdeb) {
          $sumd=$sumd+$sumdeb->sumamount;
        }
        $accountname='';
        $subaccountname='';
        $sum=0;
        return view('reports.periodpoliciesexpenses',compact('company','policiesdeb','policiescred','accountnames','policiesperioddeb','policiesperiodcred','accountname','subaccountname','sum','sumd','arraysumcreds','arraysumdebs'));
    }

    public function downloadPeriodpolicieexpenses(Request $request){
      $datetoday=$request->datetoday;
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
      $policiesdeb=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
      $sumdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $policiescred=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountcred=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
      $sumcreds=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $policiesperioddeb=array();
      foreach ($policiesdeb as $policiedeb) {
        $policiesperioddeb[$policiedeb->namesubaccount]=$policiedeb->accountName;
      }
      $policiesperiodcred=array();
      foreach ($policiescred as $policiecred) {
        $policiesperiodcred[$policiecred->namesubaccount]=$policiecred->accountName;
      }
      $arraysumcreds=array();
      foreach ($sumcreds as $sumcred) {
        $arraysumcreds[$sumcred->accountName]=$sumcred->sumamount;
      }
      $arraysumdebs=array();
      foreach ($sumdebs as $sumdeb) {
        $arraysumdebs[$sumdeb->accountName]=$sumdeb->sumamount;
      }
      $sumd=0;
      foreach ($sumdebs as $sumdeb) {
        $sumd=$sumd+$sumdeb->sumamount;
      }
      $accountname='';
      $subaccountname='';
      $sum=0;
      $pdf = \PDF::loadView('reports.periodpoliciesexpensesPDF',compact('company','policiesdeb','policiescred','accountnames','policiesperioddeb','policiesperiodcred','accountname','subaccountname','sum','sumd','arraysumcreds','arraysumdebs'));
      return $pdf->download();
    }

    //Genera la póliza de periodos.
    public function generatePeriodPoliciesdaily(Request $request)
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
        $policiesdeb=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="No ingreso y no egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
        $sumdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="No ingreso y no egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $policiescred=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountcred=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="No ingreso y no egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
        $sumcreds=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="No ingreso y no egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $policiesperioddeb=array();
        foreach ($policiesdeb as $policiedeb) {
          $policiesperioddeb[$policiedeb->namesubaccount]=$policiedeb->accountName;
        }
        $policiesperiodcred=array();
        foreach ($policiescred as $policiecred) {
          $policiesperiodcred[$policiecred->namesubaccount]=$policiecred->accountName;
        }
        $arraysumcreds=array();
        foreach ($sumcreds as $sumcred) {
          $arraysumcreds[$sumcred->accountName]=$sumcred->sumamount;
        }
        $arraysumdebs=array();
        foreach ($sumdebs as $sumdeb) {
          $arraysumdebs[$sumdeb->accountName]=$sumdeb->sumamount;
        }
        $sumd=0;
        foreach ($sumdebs as $sumdeb) {
          $sumd=$sumd+$sumdeb->sumamount;
        }
        $accountname='';
        $subaccountname='';
        $sum=0;
        return view('reports.periodpoliciesdaily',compact('company','policiesdeb','policiescred','accountnames','policiesperioddeb','policiesperiodcred','accountname','subaccountname','sum','sumd','arraysumcreds','arraysumdebs'));
    }

    public function downloadPeriodpoliciedaily(Request $request){
      $datetoday=$request->datetoday;
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
      $policiesdeb=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountdeb=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="No ingreso y no egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
      $sumdebs=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="No ingreso y no egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $policiescred=DB::select('select cashflows.amount,subaccounts.idsubaccount,subaccounts.namesubaccount,accountcatalogs.code,accountcatalogs.accountName from cashflows inner join subaccounts on cashflows.idsubaccountcred=subaccounts.id inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id where typeflow="No ingreso y no egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy'));
      $sumcreds=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where typeflow="No ingreso y no egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $policiesperioddeb=array();
      foreach ($policiesdeb as $policiedeb) {
        $policiesperioddeb[$policiedeb->namesubaccount]=$policiedeb->accountName;
      }
      $policiesperiodcred=array();
      foreach ($policiescred as $policiecred) {
        $policiesperiodcred[$policiecred->namesubaccount]=$policiecred->accountName;
      }
      $arraysumcreds=array();
      foreach ($sumcreds as $sumcred) {
        $arraysumcreds[$sumcred->accountName]=$sumcred->sumamount;
      }
      $arraysumdebs=array();
      foreach ($sumdebs as $sumdeb) {
        $arraysumdebs[$sumdeb->accountName]=$sumdeb->sumamount;
      }
      $sumd=0;
      foreach ($sumdebs as $sumdeb) {
        $sumd=$sumd+$sumdeb->sumamount;
      }
      $accountname='';
      $subaccountname='';
      $sum=0;
      $pdf = \PDF::loadView('reports.periodpoliciesdailyPDF',compact('company','policiesdeb','policiescred','accountnames','policiesperioddeb','policiesperiodcred','accountname','subaccountname','sum','sumd','arraysumcreds','arraysumdebs'));
      return $pdf->download();
    }

    public function generateAux(){
      $accounts=DB::select('select namesubaccount from subaccounts inner join accountancycatalogs on subaccounts.idaccount=accountancycatalogs.id where idAccountancy='.session('idaccountancy'));
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      return view('reports.assistant',compact('company','accounts'));
    }

    public function downloadAux(Request $request){
      $datetoday=$request->datetoday;
      $account=$request->nameaccount;
      $saldo=0;
      $flowsd=DB::select('select typeflow,date,concept,amount from cashflows inner join subaccounts on cashflows.idsubaccountdeb=subaccounts.id where namesubaccount="'.$account.'"');
      $flowsc=DB::select('select typeflow,date,concept,amount from cashflows inner join subaccounts on cashflows.idsubaccountcred=subaccounts.id where namesubaccount="'.$account.'"');
      foreach($flowsd as $flowsde){
        if ($flowsde->typeflow=="Ingreso") {
          $saldo=$flowsde->amount+$saldo;
        }else{
          if($flowsde->typeflow=="Egreso"){
            $saldo=$saldo-$flowsde->amount;
          }
        }
      }
      foreach($flowsc as $flowscr){
        if ($flowscr->typeflow=="Ingreso") {
          $saldo=$flowscr->amount+$saldo;
        }else{
          if($flowscr->typeflow=="Egreso"){
            $saldo=$saldo-$flowscr->amount;
          }
        }
      }
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $pdf = \PDF::loadView('reports.assistantPDF',compact('company','flowsd','flowsc','saldo','account'));
      return $pdf->download();
    }

    //Genera el flujo de efectivo.
    public function generateCashflow(Request $request)
    {
        $initaldate=$request->initaldate;
        $finaldate=$request->finaldate;
        $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
        $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
        $actopdeb=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Operación" and typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $actopcred=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Operación" and typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $actindeb=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Inversión" and typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $actincred=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Inversión" and typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $actfideb=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Financiamiento" and typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $actficred=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Financiamiento" and typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
        $sumactopcred=0;
        $sumactopdeb=0;
        $sumactincred=0;
        $sumactindeb=0;
        $sumactficred=0;
        $sumactfideb=0;
        return view('reports/cashflow',compact('company','actopdeb','actopcred','actopdeb','actindeb','actincred','actfideb','actficred','sumactopcred','sumactopdeb','sumactincred','sumactindeb','sumactficred','sumactfideb','initaldate','finaldate'));
    }

    public function downloadCashflow(Request $request){
      $initaldate=$request->initaldate;
      $finaldate=$request->finaldate;
      $company=User::join('companies','users.idCompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName')->where('users.id',auth()->user()->id)->get();
      $accountnames=DB::select('select DISTINCT accountName from accountancycatalogs inner join accountcatalogs on accountancycatalogs.CodeAccount=accountcatalogs.id');
      $actopdeb=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Operación" and typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $actopcred=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Operación" and typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $actindeb=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Inversión" and typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $actincred=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Inversión" and typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $actfideb=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashdeb on cashdeb.idsubaccountdeb=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Financiamiento" and typeflow="Egreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $actficred=DB::select('select accountName,sum(amount) as sumamount from accountancycatalogs inner join subaccounts on accountancycatalogs.id=subaccounts.idaccount inner join cashflows cashcred on cashcred.idsubaccountcred=subaccounts.id inner join accountcatalogs on accountancycatalogs.codeAccount=accountcatalogs.id where activity="Financiamiento" and typeflow="Ingreso" and accountancycatalogs.idAccountancy='.session('idaccountancy').' GROUP BY accountName');
      $sumactopcred=0;
      $sumactopdeb=0;
      $sumactincred=0;
      $sumactindeb=0;
      $sumactficred=0;
      $sumactfideb=0;
      foreach($actopcred as $actopcre){
        $sumactopcred=$sumactopcred+$actopcre->sumamount;
      }
      foreach($actopdeb as $actopde){
        $sumactopdeb=$sumactopdeb+$actopde->sumamount;
      }
      foreach($actincred as $actincre){
        $sumactincred=$sumactincred+$actincre->sumamount;
      }
      foreach($actindeb as $actinde){
        $sumactindeb=$sumactindeb+$actinde->sumamount;
      }
      foreach($actficred as $actficre){
        $sumactficred=$sumactficred+$actinde->sumamount;
      }
      foreach($actfideb as $actfide){
        $sumactfideb=$sumactfideb+$actfide->sumamount;
      }
      $pdf = \PDF::loadView('reports.cashflowPDF',compact('company','actopdeb','actopcred','actopdeb','actindeb','actincred','actfideb','actficred','sumactopcred','sumactopdeb','sumactincred','sumactindeb','sumactficred','sumactfideb','initaldate','finaldate'));
      return $pdf->download();
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
