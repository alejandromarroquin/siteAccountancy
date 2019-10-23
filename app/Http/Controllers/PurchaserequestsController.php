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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentdate=date("Y-m-d");
        return view('purchases.create',compact("currentdate"));
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
    public function update(Request $request, purchaserequests $purchaserequests)
    {
        //
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
