<?php

namespace App\Http\Controllers;

use App\purchaserequests;
use App\budgets;
use App\expense;
use DB;
use Illuminate\Http\Request;

class PurchaserequestsController extends Controller
{
    /**
     * Muestra la vista con las solicitudes de compra pendientes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $status0=purchaserequests::all()->where('status',0);
      return view('purchases.index',compact('status0'));
    }

    /**
     * Consulta las solicitudes de compra pendientes.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consultPurchases(Request $request){
      $requestspurchases=purchaserequests::all()->where('status','!=',0);
      foreach ($requestspurchases as $purchase) {
        if($purchase->status==1){
          echo '<tr class="row100 body rowshistorial">
          <td class="cell100 column1">'.$purchase->date.'</td>
          <td class="cell100 column2">'.$purchase->concept.'</td>
          <td class="cell100 column3">'.$purchase->subtotal.'</td>
          <td class="cell100 column4">'.$purchase->iva.'</td>
          <td class="cell100 column5">'.$purchase->total.'</td>
          <td class="cell100 column5" style="color:green;">Aprobada</td></tr>';
        }else{
          echo '<tr class="row100 body rowshistorial">
          <td class="cell100 column1">'.$purchase->date.'</td>
          <td class="cell100 column2">'.$purchase->concept.'</td>
          <td class="cell100 column3">'.$purchase->subtotal.'</td>
          <td class="cell100 column4">'.$purchase->iva.'</td>
          <td class="cell100 column5">'.$purchase->total.'</td>
          <td class="cell100 column5" style="color:red;">Rechazada</td></tr>';
        }

      }
    }

    //Consulta la cantidad de presupuesto disponible para la categoria seleccionada
    public function amountCategory($category){
      $amount=expense::select('amount','reserved')->where('id',$category)->get();
      foreach ($amount as $data) {
        $amount=$data->amount;
        $reserved=$data->reserved;
      }
      $amount=[$amount,$reserved];
      return $amount;
    }

    /**
     * Muestra el formulario para solicitar una compra.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys=budgets::join('expenses','budgets.id','=','expenses.idBudget')->select('expenses.id','expenses.concept')->where('expenses.purchases',1)->where('budgets.idAccountancy',session('idaccountancy'))->get();
        return view('purchases.create',compact('categorys'));
    }

    /**
     * Registra la solicitud de compra.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase=new purchaserequests;
        $expense=expense::find($request->category);
        DB::beginTransaction();
        try {
          $purchase->idAccountancy=session('idaccountancy');
          $purchase->idExpenses=$request->category;
          $purchase->date=$request->date;
          $purchase->concept=$request->concept;
          $purchase->priceunit=$request->unitcost;
          $purchase->quantity=$request->quantity;
          $purchase->subtotal=$request->subtotal;
          $purchase->iva=$request->iva;
          $purchase->total=$request->total;
          $purchase->status=0;
          $purchase->save();

          $reserved=$request->reserved+$request->total;
          $expense->reserved=$reserved;
          $expense->save();

          DB::commit();
          return 1;
        } catch (\PDOException $e) {
          DB::rollBack();
          return 0;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\purchaserequests  $purchaserequests
     * @return \Illuminate\Http\Response
     */
    public function show(purchaserequests $purchaserequests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\purchaserequests  $purchaserequests
     * @return \Illuminate\Http\Response
     */
    public function edit(purchaserequests $purchaserequests)
    {
        //
    }

    /**
     * Actualiza el estatus de la compra (pendiente,aprobada o rechazada).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\purchaserequests  $purchaserequests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $purchase=purchaserequests::find($request->id);
        DB::beginTransaction();
        try {
          $purchase->status=$request->status;
          $purchase->save();
          DB::commit();
        } catch (\PDOException $e) {
          DB::rollBack();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\purchaserequests  $purchaserequests
     * @return \Illuminate\Http\Response
     */
    public function destroy(purchaserequests $purchaserequests)
    {
        //
    }
}
