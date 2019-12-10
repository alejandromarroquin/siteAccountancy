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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::join('companies','users.id','=','companies.id')->select('name','lastname','email')->get();
        return view('users.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businessnames=DB::table('taxinformations')->join('companies','taxinformations.id','=','companies.id')->select('businessname','companies.id')->get();
        return view('users.user.create',compact("businessnames"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user=new User;
      DB::beginTransaction();
      try {
        $user->idCompany=$request->company;
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::join('companies','users.id','=','companies.id')->join('taxinformations','companies.id','=','taxinformations.id')->select('taxinformations.businessName','users.idCompany as idcompany','users.id as iduser','users.name','users.lastname','users.email','users.password')->where('users.email',$id)->get();
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
     * Update the specified resource in storage.
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
        $user->password=$request->password;
        $user->save();
        DB::commit();
      } catch (\PDOException $e) {
        DB::rollBack();
      }
      $url = asset('/usuarios_consultar');
      return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,User $user)
    {
        if(User::join('companies','users.id','=','companies.id')->where('users.email',$request->elegido)->delete()){
          return 1;
        }else{
          return 0;
        }
    }
}
