<?php

namespace App\Http\Controllers;

use App\accountcatalogs;
use DB;
use App\accounts;
use App\accountancie;
use App\accountancycatalogs;
use App\Subaccount;
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
     * Realiza consulta a la base de datos del catálogo de cuentas
     * de la empresa que ha iniciado sesión y lo muestra en la vista
     * junto a las cuentas que puede agregar de acuerdo al catálogo
     * del SAT
     *
     * Entradas: No recibe parametros
     * Salidas: Retorna uns vista con las cuentas y subcuentas del cátalogo de cuentas
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts=accounts::select('groupcode','accountname')->get();
        $catalog=accountancycatalogs::join('subaccounts','accountancycatalogs.id','=','subaccounts.idaccount')->join('accountcatalogs','accountancycatalogs.codeAccount','=','accountcatalogs.id')->select('idsubaccount as code','namesubaccount as accountName')->where('accountancycatalogs.idAccountancy',session('idaccountancy'))->get();
        return view('accountancy.accountcatalogs.create',compact('accounts','catalog'));
    }

    /**
     * Consulta las subcuentas que pertenezcan a la cuenta
     * seleccionada por el usuario.
     * 
     * Entradas: Recibe a tráves del request la cuenta seleccionada
     * Salidas: Retorna código HTML con las opciones derivadas de la consulta
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
     * Asocia el id de la subcuenta que se esta registrando y registra la subsubcuenta ingresada 
     * por el usuario.
     * 
     * Entradas: Request con el id de la subcuenta asociada, nombre e identificador de la subsubcuenta
     * Salidas: Código HTML que se agrega a la tabla del cátalogo de cuentas de la vista
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catalog=new accountancycatalogs;
        $subaccount=new Subaccount;
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
          $catalog->debtor=0;
          $catalog->creditor=0;
          $catalog->save();

          $subaccount->idaccount=$catalog->id;
          $subaccount->idsubaccount=$request->idsubsubaccount;
          $subaccount->namesubaccount=$request->namesubsubaccount;

          if($subaccount->save()){
            echo '<tr class="row100 body"><td class="cell100 column1">'.$code.'</td><td class="cell100 column2">'.$accountname.'</td row100 body><td class="cell100 column3"><button type="button" class="btn btn-danger delete" value="'.$code.'">Eliminar</button></td></tr>';
          }

          DB::commit();
        } catch (\PDOException $e) {
          DB::rollBack();
          return 0;
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
     * Elimina el id de la cuanta seleccionada del catálogo de cuentas.
     * 
     * Entradas: Recibe el id de la cuenta
     * Salidas: 1 (eliminado), 0 (no eliminado)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accountcatalogs  $accountcatalogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, accountcatalogs $accountcatalogs)
    {
        if(accountancycatalogs::join('subaccounts','accountancycatalogs.id','=','subaccounts.idaccount')->join('accountcatalogs','accountancycatalogs.codeAccount','=','accountcatalogs.id')->where('subaccounts.idsubaccount',$request->elegido)->delete()){
          return 1;
        }else{
          return 0;
        }
    }
}
