<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\cfdi;
use App\taxinformation;
use App\customers;
use App\unitmeasurements;
use App\methodpayment;
use App\waytopay;
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
        $senderdata=taxinformation::join('companies','taxinformations.id','=','companies.id')->join('contactlocations','taxinformations.id','=','contactlocations.id')->join('addresses','contactlocations.idAddress','=','addresses.id')->select('taxinformations.rfc','taxinformations.businessname','taxinformations.taxRegime','addresses.street','addresses.numExt','addresses.colony','addresses.city','addresses.state')->where('companies.id',session('idcompany'))->get();
        $customers=customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessname')->get();
        $methodspayment=methodpayment::all();
        $wayspayment=waytopay::all();
        $units=unitmeasurements::all();
        return view('cfdi.create',compact('units','senderdata','customers','methodspayment','wayspayment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCustomer(Request $request)
    {
        $customer=customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->select('taxinformations.rfc')->where('taxinformations.businessname',$request->elegido)->get();
        foreach($customer as $data){
          $customer=$data->rfc;
        }
        return $customer;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Storage::disk('local')->makeDirectory('path/to'); 
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
