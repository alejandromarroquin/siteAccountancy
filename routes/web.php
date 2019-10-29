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

Route::get('/empresas','CompanieController@create');
Route::post('/empresacreate','CompanieController@store');

Route::get('/usuarios','UserController@create');
Route::post('/usercreate','UserController@store');

Route::get('/factura','CfdiController@create');
Route::post('/cfdicreate','CfdiController@store');

Route::get('/budget','BudgetsController@create');
Route::post('/budgetcreate','BudgetsController@store');

Route::get('/movimientos','CapitalmovementsController@create');
Route::post('/movementscreate','CapitalmovementsController@store');

Route::get('/compras','PurchaserequestsController@create');
Route::post('/purchasecreate','PurchaserequestsController@store');

Route::get('/cuentas','AccountcatalogsController@create');
Route::get('/accountscreate','AccountcatalogsController@store');
Route::get('/accountsdelete','AccountcatalogsController@destroy');
Route::get('/getaccount','AccountcatalogsController@consultSubaccount');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
