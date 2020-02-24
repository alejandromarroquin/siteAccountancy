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
     * Consulta la información básica para almacenarla en variables de session.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=User::join('companies','users.idCompany','=','companies.id')->join('configurations','companies.id','=','configurations.idCompany')->join('accountancies','companies.id','=','accountancies.idCompany')->join('taxinformations','companies.idTaxInformation','=','taxinformations.id')->select('companies.id as idcompany','configurations.cfditemplate','accountancies.id as idaccountancy','taxinformations.rfc as rfc')->where('users.id',auth()->user()->id)->get();
        foreach ($company as $data) {
            $idcompany=$data->idcompany;
            $idaccountancy=$data->idaccountancy;
            $rfc=$data->rfc;
            $cfditamplate=$data->cfditemplate;
        }
        session(['idcompany' => $idcompany, 'idaccountancy' => $idaccountancy, 'rfc' => $rfc, 'cfditemplate' => $cfditamplate]);
        return view('home');
    }
}
