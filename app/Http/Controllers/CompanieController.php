<?php

namespace App\Http\Controllers;

use DB;
use File;
use App\companie;
use App\Phone;
use App\taxinformation;
use App\addresse;
use App\emails;
use App\contactlocation;
use App\accountancie;
use App\customers;
use App\taxregime;
use App\configuration;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    /**
     * Consulta en la base de datos todos los clientes
     * de la empresa que ha iniciado sesión y los muestra
     * en la vista en una tabla.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->join('contactlocations','taxinformations.idtaxinformation','=','contactlocations.id')->join('emails','contactlocations.idEmail','=','emails.id')->join('addresses','contactlocations.idAddress','=','addresses.id')->join('phones','contactlocations.idPhone','=','phones.id')->select('taxinformations.businessname','emails.email','taxinformations.rfc','phones.office')->where('customers.idCompany',session('idcompany'))->get();
        return view('users.company.index',compact('companies'));
    }

    /**
     * Muestra la vista para registrar un nuevo cliente.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taxregimes=taxregime::all();
        return view('users.company.create',compact('taxregimes'));
    }

    //Valida que el RFC sea compatible con el regimen fiscal seleccionado
    public function validateRFC($taxregime){
        $type=taxregime::select('fisica','moral')->where('id',$taxregime)->get();
        foreach ($type as $data) {
          $fisica=$data->fisica;
          $moral=$data->moral;
        }
        if($fisica==0 && $moral==1){
          return 1;
        }else{
          if($fisica==1 && $moral==0){
            return 2;
          }else{
            return 3;
          }
        }
    }

    /**
     * Registra en la base de datos la información del cliente y crea las carpetas
     * necesarias para almacenar los archivos que está genere.
     * 
     * Entradas: Request con los datos del cliente
     * Salidas: 1 (registrado), 0 (no registrado)
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
      $configuration=new configuration;
      $accountancie=new accountancie;

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
        $contact->responsible=$request->responsible;
        $contact->positionresponsible=$request->positionresponsible;
        $contact->web=$request->web;
        $contact->save();

        $taxinf->idtaxinformation=$contact->id;
        $taxinf->rfc=$request->rfc;
        $taxinf->businessname=$request->businessname;
        $taxinf->idtaxRegime=$request->taxregime;
        $taxinf->save();

        if (auth()->user()->idCompany==1) {
          $company->idTaxInformation=$taxinf->id;
          $company->save();
          $configuration->idCompany=$company->id;
          $configuration->cfditemplate=1;
          $configuration->save();
          $accountancie->idCompany=$company->id;
          $accountancie->save();
        }

        $customers->idCompany=session('idcompany');
        $customers->idTaxInformation=$taxinf->id;
        $customers->save();

        //Se crea la carpeta con las subcarpetas necesarias para cada empresa
          $path = public_path().'/storage/Company/'.$request->rfc;
          File::makeDirectory($path, $mode = 0777, true, true);
          $pathbrand=$path.'/Brand';
          File::makeDirectory($pathbrand, $mode = 0777, true, true);
          $pathcertificates=$path.'/Certificates';
          File::makeDirectory($pathcertificates, $mode = 0777, true, true);
          $pathcommercial=$path.'/Commercial';
          File::makeDirectory($pathcommercial, $mode = 0777, true, true);
          $pathcfdis=$path.'/CFDIS';
          File::makeDirectory($pathcfdis, $mode = 0777, true, true);

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
     * Consulta los datos del cliente seleccionado y los envia a la vista.
     *
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function edit($companie)
    {
        $taxregimes=taxregime::all();
        $datacompanie=customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->join('taxregimes','taxinformations.idtaxRegime','=','taxregimes.id')->join('contactlocations','taxinformations.idtaxinformation','=','contactlocations.id')->join('emails','contactlocations.idEmail','=','emails.id')->join('phones','contactlocations.idPhone','=','phones.id')->join('addresses','contactlocations.idAddress','=','addresses.id')->select('taxinformations.id as taxid','taxinformations.rfc','taxinformations.businessname as businessName','taxregimes.description','taxregimes.id as regimeid','contactlocations.id as contactid','contactlocations.responsible','contactlocations.positionresponsible','contactlocations.web','emails.id as emailid','emails.email','phones.id as phoneid','phones.office','phones.extension','phones.cellphone','addresses.id as addressid','addresses.street','addresses.colony','addresses.state','addresses.city','addresses.numExt','addresses.numInt','addresses.postalCode','addresses.country')->where('taxinformations.rfc',$companie)->get();
        foreach ($datacompanie as $data) {
          $taxid=$data->taxid;
          $rfc=$data->rfc;
          $businessName=$data->businessName;
          $taxRegimecode=$data->regimeid;
          $taxRegimedescrip=$data->description;
          $emailid=$data->emailid;
          $email=$data->email;
          $contactid=$data->contactid;
          $responsible=$data->responsible;
          $positionresponsible=$data->positionresponsible;
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
        return view('users.company.edit',compact('taxid','rfc','businessName','taxRegimedescrip','taxRegimecode','emailid','email','contactid','responsible','positionresponsible','web','phoneid','office','extension','cellphone','addressid','street','colony','state','city','numExt','numInt','postalCode','country','taxregimes'));
    }

    /**
     * Actualiza los datos del cliente.
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
        $taxinf->idtaxRegime=$request->taxregime;
        $taxinf->rfc=$request->rfc;
        $taxinf->businessname=$request->businessname;
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

        $contactlocation->responsible=$request->responsible;
        $contactlocation->positionresponsible=$request->positionresponsible;
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
     * Elimina el cliente seleccionado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,companie $companie)
    {
      if (auth()->user()->idCompany==1) {
        taxinformation::join('companies','companies.idTaxInformation','=','taxinformations.id')->where('taxinformations.rfc',$request->elegido)->delete();
        
        return 1;
      }else{
        if(customers::join('companies','customers.idCompany','=','companies.id')->join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->where('taxinformations.rfc',$request->elegido)->delete()){
          return 1;
        }else{
          return 0;
        }
      }
      

    }
}
