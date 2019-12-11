<?php

namespace App\Http\Controllers;

use DB;
use App\companie;
use App\Phone;
use App\taxinformation;
use App\addresse;
use App\emails;
use App\contactlocation;
use App\accountancie;
use App\customers;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->join('contactlocations','taxinformations.idtaxinformation','=','contactlocations.id')->join('emails','contactlocations.idEmail','=','emails.id')->join('addresses','contactlocations.idAddress','=','addresses.id')->join('phones','contactlocations.idPhone','=','phones.id')->select('taxinformations.businessname','emails.email','taxinformations.rfc','phones.office')->where('customers.idCompany',session('idcompany'))->get();
        return view('users.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $phones=new Phone;
      $email=new emails;
      $address=new addresse;
      $contact=new contactlocation;
      $taxinf=new taxinformation;
      $company=new companie;
      $customers=new customers;

      DB::beginTransaction();
      try{
        $phones->office=$request->phoneoffice;
        $phones->extension=$request->extension;
        $phones->cellphone=$request->cellphone;
        $phones->save();

        $email->email=$request->email;
        $email->save();

        $address->street=$request->street;
        $address->colony=$request->colony;
        $address->state=$request->estate;
        $address->city=$request->city;
        $address->numExt=$request->numext;
        $address->numInt=$request->numint;
        $address->postalCode=$request->postalcode;
        $address->country=$request->contry;
        $address->save();

        $contact->idAddress=$address->id;
        $contact->idPhone=$phones->id;
        $contact->idEmail=$email->id;
        $contact->web=$request->web;
        $contact->responsible=$request->responsible;
        $contact->save();

        $taxinf->idtaxinformation=$contact->id;
        $taxinf->rfc=$request->rfc;
        $taxinf->businessname=$request->businessname;
        $taxinf->taxRegime=$request->taxregime;
        $taxinf->save();

        $customers->idCompany=session('idcompany');
        $customers->idTaxInformation=$taxinf->id;
        $customers->save();

        DB::commit();
        return 1;
      }catch(\PDOException $e){
        DB::rollBack();
        return 0;
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function show(companie $companie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function edit($companie)
    {
        $datacompanie=customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->join('contactlocations','taxinformations.idtaxinformation','=','contactlocations.id')->join('emails','contactlocations.idEmail','=','emails.id')->join('phones','contactlocations.idPhone','=','phones.id')->join('addresses','contactlocations.idAddress','=','addresses.id')->select('taxinformations.id as taxid','taxinformations.rfc','taxinformations.businessname as businessName','taxinformations.taxRegime','contactlocations.id as contactid','contactlocations.responsible','contactlocations.web','emails.id as emailid','emails.email','phones.id as phoneid','phones.office','phones.extension','phones.cellphone','addresses.id as addressid','addresses.street','addresses.colony','addresses.state','addresses.city','addresses.numExt','addresses.numInt','addresses.postalCode','addresses.country')->where('taxinformations.rfc',$companie)->get();
        foreach ($datacompanie as $data) {
          $taxid=$data->taxid;
          $rfc=$data->rfc;
          $businessName=$data->businessName;
          $taxRegime=$data->taxRegime;
          $emailid=$data->emailid;
          $email=$data->email;
          $contactid=$data->contactid;
          $responsible=$data->responsible;
          $web=$data->web;
          $phoneid=$data->phoneid;
          $office=$data->office;
          $extension=$data->extension;
          $cellphone=$data->cellphone;
          $addressid=$data->addressid;
          $street=$data->street;
          $colony=$data->colony;
          $state=$data->state;
          $city=$data->city;
          $numExt=$data->numExt;
          $numInt=$data->numInt;
          $postalCode=$data->postalCode;
          $country=$data->country;
        }
        return view('users.company.edit',compact('taxid','rfc','businessName','taxRegime','emailid','email','contactid','responsible','web','phoneid','office','extension','cellphone','addressid','street','colony','state','city','numExt','numInt','postalCode','country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $taxinf=taxinformation::find($request->taxid);
      $email=emails::find($request->emailid);
      $address=addresse::find($request->addressid);
      $phone=Phone::find($request->phoneid);
      $contactlocation=contactlocation::find($request->contactid);
      DB::beginTransaction();
      try {
        $taxinf->rfc=$request->rfc;
        $taxinf->businessname=$request->businessname;
        $taxinf->taxRegime=$request->taxregime;
        $taxinf->save();

        $email->email=$request->email;
        $email->save();

        $phone->office=$request->phoneoffice;
        $phone->extension=$request->extension;
        $phone->cellphone=$request->cellphone;
        $phone->save();

        $address->street=$request->street;
        $address->colony=$request->colony;
        $address->state=$request->estate;
        $address->city=$request->city;
        $address->numExt=$request->numext;
        $address->numInt=$request->numint;
        $address->postalCode=$request->postalcode;
        $address->country=$request->contry;
        $address->save();

        $contactlocation->web=$request->web;
        $contactlocation->save();

        DB::commit();
        return 1;
      } catch (\PDOException $e) {
        DB::rollBack();
        return 0;
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,companie $companie)
    {
      if(customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->where('taxinformations.rfc',$request->elegido)->delete()){
        return 1;
      }else{
        return 0;
      }

    }
}
