<?php

namespace App\Http\Controllers;

use App\cfdi;
use App\taxinformation;
use App\unitmeasurements;
use Illuminate\Http\Request;
use DB;

class CfdiController extends Controller
{

    public function __construct()
    {

    }
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
        date_default_timezone_set("UTC");
        $expeditiondate=date("Y-m-d H:i:s");
        $bisinessname=taxinformation::join('companies','taxinformations.id','=','companies.id')->join('contactlocations','taxinformations.id','=','contactlocations.id');
        $units=unitmeasurements::all();
        return view('cfdi.create',compact('expeditiondate','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cfdi=new cfdi;
      DB::beginTransaction();
      try {
        $cfdi->idCompany=1;
        $cfdi->idMethodPayment=1;
        $cfdi->expeditionPlace=1;
        $cfdi->expeditionDate=date("Y-m-d");
        $cfdi->iva=67.39;
        $cfdi->typePayment=1;
        $cfdi->customsNumber=1;
        $cfdi->customsDate=date("Y-m-d");
        $cfdi->digitalStamp="";
        $cfdi->codeqr="";
        $cfdi->save();
        DB::commit();
      } catch (\PDOException $e) {
        DB::rollBack();
      }
        foreach ($request->quantity as $k) {
          echo ($k);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cfdi  $cfdi
     * @return \Illuminate\Http\Response
     */
    public function show(cfdi $cfdi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cfdi  $cfdi
     * @return \Illuminate\Http\Response
     */
    public function edit(cfdi $cfdi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cfdi  $cfdi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cfdi $cfdi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cfdi  $cfdi
     * @return \Illuminate\Http\Response
     */
    public function destroy(cfdi $cfdi)
    {
        //
    }
}
