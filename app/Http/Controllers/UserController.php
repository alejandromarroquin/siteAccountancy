<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taxinformation;
use App\User;
use App\companie;
Use DB;
use Hash;

class UserController extends Controller
{
    /**
     * Muestra la vista con los usuarios de la empresa que inicio sesión.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::join('companies','users.idCompany','=','companies.id')->select('name','lastname','email')->where('companies.id',session('idcompany'))->get();
        return view('users.user.index',compact('users'));
    }

    /**
     * Muestra el formulario para registrar un usuaro.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businessnames=DB::table('companies')->join('customers','companies.id','=','customers.idCompany')->join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->select('businessname','customers.idCompany')->get();
        return view('users.user.create',compact("businessnames"));
    }

    /**
     * Registra en la base de datos la información del usuario registrado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user=new User;
      DB::beginTransaction();
      try {
        if(auth()->user()->idCompany!=1){
          $user->idCompany=session('idcompany');
        }else{
          $user->idCompany=$request->company;
        }
        $user->typeuser=$request->typeuser;
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Muestra la vista con los datos del usuario que se desea editar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::join('companies','users.idcompany','=','companies.id')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessName','users.idCompany as idcompany','users.id as iduser','users.name','users.lastname','users.email','users.password')->where('users.email',$id)->get();
        foreach ($user as $data) {
          $idcompany=$data->idcompany;
          $iduser=$data->iduser;
          $company=$data->businessName;
          $name=$data->name;
          $lastname=$data->lastname;
          $email=$data->email;
          $passw=$data->password;
        }
        return view('users.user.edit',compact('company','name','lastname','email','passw','idcompany','iduser'));
    }

    /**
     * Actualiza la información del usuario seleccionado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $user=User::find($request->iduser);
      DB::beginTransaction();
      try {
        $user->idCompany=$request->idcompany;
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        DB::commit();
        return 1;
      } catch (\PDOException $e) {
        DB::rollBack();
        return 0;
      }

    }

    /**
     * Elimina el usuario seleccionado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,User $user)
    {
        if(User::join('companies','users.idCompany','=','companies.id')->where('users.email',$request->elegido)->delete()){
          return 1;
        }else{
          return 0;
        }
    }
}
