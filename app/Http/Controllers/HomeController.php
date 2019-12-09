<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('accountancies','companies.id','=','accountancies.idCompany')->select('companies.id as idcompany','accountancies.id as idaccountancy')->where('users.id',auth()->user()->id)->get();
        foreach ($company as $data) {
            $idcompany=$data->idcompany;
            $idaccountancy=$data->idaccountancy;
        }
        session(['idcompany' => $idcompany, 'idaccountancy' => $idaccountancy]);
        return view('home');
    }
}
