<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresas_consultar','CompanieController@index');
Route::get('/empresa_registrar','CompanieController@create');
Route::post('/empresacreate','CompanieController@store');
Route::get('/empresadelete','CompanieController@destroy');
Route::get('/empresaedit/{id}','CompanieController@edit');
Route::post('/empresaupdate','CompanieController@update');

Route::get('/usuarios_consultar','UserController@index');
Route::get('/usuario_registrar','UserController@create');
Route::post('/usercreate','UserController@store');
Route::get('/userdelete','UserController@destroy');
Route::get('/useredit/{id}','UserController@edit');
Route::post('/userupdate','UserController@update');

Route::get('/factura','CfdiController@create');
Route::post('/cfdicreate','CfdiController@store');

Route::get('/budget','BudgetsController@create');
Route::post('/budgetcreate','BudgetsController@store');

Route::get('/movimientos','CapitalmovementsController@create');
Route::post('/movementscreate','CapitalmovementsController@store');

Route::get('/compras_consultar','PurchaserequestsController@index');
Route::get('/compras','PurchaserequestsController@create');
Route::post('/purchasecreate','PurchaserequestsController@store');
Route::post('/purchaseupdate','PurchaserequestsController@update');
Route::get('/purchasesrequest','PurchaserequestsController@consultPurchases');

Route::get('/cuentas','AccountcatalogsController@create');
Route::get('/accountscreate','AccountcatalogsController@store');
Route::get('/accountsdelete','AccountcatalogsController@destroy');
Route::get('/getaccount','AccountcatalogsController@consultSubaccount');

Route::get('/balanza_conaultar','BalancesheetsController@index');
Route::get('/balanza','BalancesheetsController@create');
Route::get('/balancecreate','BalancesheetsController@store');

Route::get('/generar_reportes','ReportsController@indexGenerateReports');
Route::get('/consultar_reportes','ReportsController@indexConsultReports');
Route::post('/generatebalancesheet','ReportsController@generateBalancesheet');
Route::post('/generatestatementresult','ReportsController@generateStatementresult');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
