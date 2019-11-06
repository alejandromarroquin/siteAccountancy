<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taxinformation;
use App\User;
Use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::join('companies','users.id','=','companies.id')->select('name','lastname','email')->where('idCompany',1)->get();
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
        $user->idCompany=$request->company;
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();

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
        $user=User::join('companies','users.id','=','companies.id')->join('taxinformations','companies.id','=','taxinformations.id')->select('taxinformations.businessName','users.id','users.name','users.lastname','users.email','users.password')->where('users.email',$id)->get();
        foreach ($user as $data) {
          $user=$data->id;
          $company=$data->businessName;
          $name=$data->name;
          $lastname=$data->lastname;
          $email=$data->email;
          $passw=$data->password;
        }
        return view('users.user.edit',compact('company','name','lastname','email','passw','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo "bien";
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
