<?php

namespace App\Http\Controllers;

use DB;
use App\companie;
use App\Phone;
use App\taxinformation;
use App\addresse;
use App\emails;
use App\contactlocation;
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
        //
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
          if($company->save()){
            echo"<script type='text/javascript'>alert('Registro exitoso!')</script>";
            return redirect("/empresas");
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
    public function edit(companie $companie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, companie $companie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(companie $companie)
    {
        //
    }
}
