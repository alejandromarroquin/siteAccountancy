<?php

namespace App\Http\Controllers;

use App\accountcatalogs;
use DB;
use App\accounts;
use App\accountancie;
use App\accountancycatalogs;
use Illuminate\Http\Request;

class AccountcatalogsController extends Controller
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
        $accounts=accounts::select('groupcode','accountname')->get();
        $catalog=accountancycatalogs::join('accountcatalogs','accountancycatalogs.codeAccount','=','accountcatalogs.id')->select('code','accountName')->where('accountancycatalogs.idAccountancy',session('idaccountancy'))->get();
        return view('accountancy.accountcatalogs.create',compact('accounts','catalog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consultSubaccount(Request $request)
    {
        $accounts=accountcatalogs::select('code','accountName')->where('idgrouperaccount',$request->elegido)->get();
        echo "<option selected hidden>Selecciona una subcuenta...</option>";
        foreach($accounts as $account){
            echo "<option value=".$account->code.">".$account->accountName."</option>";
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
        $catalog=new accountancycatalogs;
        $account=accountcatalogs::select('accountcatalogs.id','accountcatalogs.accountName','accountcatalogs.code')->where('code',$request->elegido)->get();
        foreach ($account as $id) {
          $idaccount=$id->id;
          $accountname=$id->accountName;
          $code=$id->code;
        }
        DB::beginTransaction();
        try {
          $catalog->idAccountancy=session('idaccountancy');
          $catalog->CodeAccount=$idaccount;
          $catalog->save();
          echo '<tr class="row100 body"><td class="cell100 column1">'.$code.'</td><td class="cell100 column2">'.$accountname.'</td row100 body><td class="cell100 column3"><button type="button" class="btn btn-danger delete" value="'.$code.'">Eliminar</button></td></tr>';
          DB::commit();
        } catch (\PDOException $e) {
          DB::rollBack();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accountcatalogs  $accountcatalogs
     * @return \Illuminate\Http\Response
     */
    public function show(accountcatalogs $accountcatalogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accountcatalogs  $accountcatalogs
     * @return \Illuminate\Http\Response
     */
    public function edit(accountcatalogs $accountcatalogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accountcatalogs  $accountcatalogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accountcatalogs $accountcatalogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accountcatalogs  $accountcatalogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, accountcatalogs $accountcatalogs)
    {
        if(accountancycatalogs::join('accountcatalogs','accountancycatalogs.codeAccount','=','accountcatalogs.id')->where('accountcatalogs.code',$request->elegido)->delete()){
          return 1;
        }else{
          return 0;
        }
    }
}
