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
        $companies=companie::join('taxinformations','companies.id','=','taxinformations.id')->join('contactlocations','taxinformations.id','=','contactlocations.id')->join('emails','contactlocations.id','=','emails.id')->join('phones','contactlocations.id','=','phones.id')->select('taxinformations.rfc','taxinformations.businessName','emails.email','phones.office')->where('companies.id','!=','1')->get();
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
        $flag=0;
        $address=new addresse;
        $email=new emails;
        $phone=new Phone;
        $contacloc=new contactlocation;
        $taxinf=new taxinformation;

        DB::beginTransaction();
        try {
          $phone->office=$request->phoneofficet;
          $phone->extension=$request->extensiont;
          $phone->cellphone=$request->cellphonet;
          $phone->save();


          $phone->office=$request->phoneofficet;
          $phone->extension=$request->extensiont;
          $phone->cellphone=$request->cellphonet;
          $phone->save();

          $address->street=$request->streett;
          $address->colony=$request->colonyt;
          $address->state=$request->estatet;
          $address->city=$request->cityt;
          $address->numExt=$request->numextt;
          $address->numInt=$request->numintt;
          $address->postalCode=$request->postalcodet;
          $address->country=$request->contryt;
          $address->save();

          $email->email=$request->emailt;
          $email->save();

          $contacloc->idaddress=$address->id;
          $contacloc->idphone=$phone->id;
          $contacloc->idemail=$email->id;
          $contacloc->save();

          $taxinf->idtaxinformation=$contacloc->id;
          $taxinf->rfc=$request->rfc;
          $taxinf->businessname=$request->businessname;
          $taxinf->taxRegime=$request->taxregime;
          $taxinf->save();

          if(!$request->checkcompletetel){
            $phone=new Phone;
            $phone->office=$request->phoneffice;
            $phone->extension=$request->extension;
            $phone->cellphone=$request->cellphone;
            if($phone->save()){
                $flag=1;
            }
          }

          if(!$request->checkcompletemail){
            $email=new emails;
            $email->email=$request->email;
            if($email->save()){
                $flag=1;
            }
          }

          if(!$request->checkcompletedir){
            $address=new addresse;
            $address->street=$request->street;
            $address->colony=$request->colony;
            $address->state=$request->estate;
            $address->city=$request->city;
            $address->numExt=$request->numext;
            $address->numInt=$request->numint;
            $address->postalCode=$request->postalcode;
            $address->country=$request->contry;
            if($address->save()){
                $flag=1;
            }
          }

          if($flag==1){
            $contacloc=new contactlocation;
            $contacloc->idaddress=$address->id;
            $contacloc->idphone=$phone->id;
            $contacloc->idemail=$email->id;
            $contacloc->save();
          }

          $company=new companie;
          $company->idTaxInformation=$taxinf->id;
          $company->idGeneralInformation=$contacloc->id;
          $company->save();

          $accountancy=new accountancie;
          $accountancy->idCompany=$company->id;

          if($accountancy->save()){
            echo"<script type='text/javascript'>alert('Registro exitoso!')</script>";
            echo "Llego aqui";
          }
          DB::commit();
        } catch (\PDOException $e) {
          DB::rollBack();
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
        $datacompanie=companie::join('taxinformations','companies.id','=','taxinformations.id')->join('contactlocations','taxinformations.id','=','contactlocations.id')->join('emails','contactlocations.id','=','emails.id')->join('phones','contactlocations.id','=','phones.id')->join('addresses','contactlocations.id','=','addresses.id')->select('taxinformations.id as taxid','rfc','businessName','taxRegime','emails.id as emailid','email','phones.id as phoneid','office','extension','cellphone','addresses.id as addressid','street','colony','state','city','numExt','numInt','postalCode','reference','country')->where('taxinformations.rfc',$companie)->get();
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
          $reference=$data->reference;
          $country=$data->country;
        }
        return view('users.company.edit',compact('taxid','rfc','businessName','taxRegime','emailid','email','phoneid','office','extension','cellphone','addressid','street','colony','state','city','numExt','numInt','postalCode','reference','country'));
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
        $taxinf->businessName=$request->businessname;
        $taxinf->taxRegime=$request->taxr;
        $taxinf->save();

        $email->email=$request->emailt;
        $email->save();

        $phone->office=$request->phoneofficet;
        $phone->extension=$request->extensiont;
        $phone->cellphone=$request->cellphonet;
        $phone->save();

        DB::commit();
      } catch (\PDOException $e) {
        DB::rollBack();
      }
      return $request->extensiont;
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
