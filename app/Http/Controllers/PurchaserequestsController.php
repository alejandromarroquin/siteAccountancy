<?php

namespace App\Http\Controllers;

use App\purchaserequests;
use DB;
use Illuminate\Http\Request;

class PurchaserequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $status0=purchaserequests::all()->where('status',0);
      return view('purchases.index',compact('status0'));
    }

    /**
     * Store a newly created resource in storage.
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
          $purchase=new purchaserequests;
          $purchase->idAccountancy=1;
          $purchase->idPersonCheck=1;
          $purchase->date=$request->date;
          $purchase->concept=$request->concept;
          $purchase->priceunit=$request->unitcost;
          $purchase->quantity=$request->quantity;
          $purchase->subtotal=$request->subtotal;
          $purchase->iva=$request->iva;
          $purchase->total=$request->total;
          $purchase->status=0;
          $purchase->save();
          DB::commit();
        } catch (\PDOException $e) {
          DB::rollBack();
        }

        return redirect('/compras')->with('message','Guardado Satisfactoriamente !');
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
     * Update the specified resource in storage.
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
