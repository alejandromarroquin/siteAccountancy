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
        if(!$phones->save()){
          return 2;
        }

        $email->email=$request->email;
        if(!$email->save()){
          return 3;
        }

        $address->street=$request->street;
        $address->colony=$request->colony;
        $address->state=$request->estate;
        $address->city=$request->city;
        $address->numExt=$request->numext;
        $address->numInt=$request->numint;
        $address->postalCode=$request->postalcode;
        $address->country=$request->contry;
        if(!$address->save()){
          return 4;
        }

        $contact->idAddress=$address->id;
        $contact->idPhone=$phones->id;
        $contact->idEmail=$email->id;
        if(!$contact->save()){
          return 5;
        }

        $taxinf->idtaxinformation=$contact->id;
        $taxinf->rfc=$request->rfc;
        $taxinf->businessname=$request->businessname;
        $taxinf->taxRegime=$request->taxregime;
        if(!$taxinf->save()){
          return 6;
        }

        $customers->idCompany=session('idcompany');
        $customers->idTaxInformation=$taxinf->id;
        if(!$customers->save()){
          return 7;
        }

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
        $datacompanie=companie::join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->join('contactlocations','taxinformations.idtaxinformation','=','contactlocations.id')->join('emails','contactlocations.idEmail','=','emails.id')->join('phones','contactlocations.idPhone','=','phones.id')->join('addresses','contactlocations.idAddress','=','addresses.id')->select('taxinformations.id as taxid','taxinformations.rfc','taxinformations.businessname as businessName','taxinformations.taxRegime','emails.id as emailid','emails.email','phones.id as phoneid','phones.office','phones.extension','phones.cellphone','addresses.id as addressid','addresses.street','addresses.colony','addresses.state','addresses.city','addresses.numExt','addresses.numInt','addresses.postalCode','addresses.country')->get();
        foreach ($datacompanie as $data) {
          $taxid=$data->taxid;
          $rfc=$data->rfc;
          $businessName=$data->businessName;
          $taxRegime=$data->taxRegime;
          $emailid=$data->emailid;
          $email=$data->email;
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
        return view('users.company.edit',compact('taxid','rfc','businessName','taxRegime','emailid','email','phoneid','office','extension','cellphone','addressid','street','colony','state','city','numExt','numInt','postalCode','country'));
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

      if(companie::join('taxinformations','companies.id','=','taxinformations.id')->where('taxinformations.rfc',$request->elegido)->delete()){
        return 1;
      }else{
        return 0;
      }

    }
}
