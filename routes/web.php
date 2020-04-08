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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth','Asistente']], function () {
    Route::get('/generar_reportes','ReportsController@indexGenerateReports');
    Route::get('/consultar_reportes','ReportsController@indexConsultReports');
    Route::post('/generatebalancesheet','ReportsController@generateBalancesheet');
    Route::get('/downloadbalancesheet','ReportsController@downloadBalancesheet');
    Route::post('/generatestatementresult','ReportsController@generateStatementresult');
    Route::get('/downloadstatementresult','ReportsController@downloadStatementresult');
    Route::post('/generatetrialbalance','ReportsController@generateTrialbalance');
    Route::get('/downloadtrialbalance','ReportsController@downloadTrialbalance');
    Route::post('/generatecashflow','ReportsController@generateCashflow');
    Route::get('/downloadcashflow','ReportsController@downloadCashflow');
    Route::post('/generateperiodpiliciesincome','ReportsController@generatePeriodPoliciesincome');
    Route::get('/downloadpolicieincome','ReportsController@downloadPeriodpolicieincome');
    Route::post('/generateperiodpiliciesexpenses','ReportsController@generatePeriodPoliciesexpenses');
    Route::get('/downloadpolicieexpenses','ReportsController@downloadPeriodpolicieexpenses');
    Route::post('/generateperiodpiliciesdaily','ReportsController@generatePeriodPoliciesdaily');
    Route::get('/downloadpoliciedaily','ReportsController@downloadPeriodpoliciedaily');
    Route::post('/generateaux','ReportsController@generateAux');
    Route::get('/downloadaux','ReportsController@downloadAux');
    Route::get('/getflows','ReportsController@consultFlows');

    Route::group(['middleware' => ['Subcontador']], function () {
        Route::get('/cuentas','AccountcatalogsController@create');
        Route::get('/accountscreate','AccountcatalogsController@store');
        Route::get('/accountsdelete','AccountcatalogsController@destroy');
        Route::get('/getaccount','AccountcatalogsController@consultSubaccount');

        Route::get('/compras_consultar','PurchaserequestsController@index');
        Route::get('/compras','PurchaserequestsController@create');
        Route::post('/purchasecreate','PurchaserequestsController@store');
        Route::post('/purchaseupdate','PurchaserequestsController@update');
        Route::get('/purchasesrequest','PurchaserequestsController@consultPurchases');
        Route::get('/amountcategory/{category}','PurchaserequestsController@amountCategory');

        Route::get('/factura','CfdiController@create');
        Route::post('/cfdicreate','CfdiController@store');
        Route::get('/getcustomer','CfdiController@getCustomer');
        Route::get('/getproduct','CfdiController@getProduct');

        Route::group(['middleware' => ['ContadorGeneral']], function () {
            Route::get('/budget','BudgetsController@create');
            Route::post('/budgetcreate','BudgetsController@store');
            Route::get('/getamount','BudgetsController@consultAmount');
            Route::get('/budgetedit/{date}','BudgetsController@edit');
            Route::post('/budgetupdate','BudgetsController@update');
            Route::get('/budgetdelete','BudgetsController@destroy');

            Route::get('/flujo_capital','CapitalmovementsController@create');
            Route::post('/movementscreate','CapitalmovementsController@store');
            Route::get('/gettSubaccountdeb','CapitalmovementsController@consultSubaccount');
        });
    });
});


Route::get('/empresas_consultar','CompanieController@index');
Route::get('/empresa_registrar','CompanieController@create');
Route::post('/empresacreate','CompanieController@store');
Route::get('/empresadelete','CompanieController@destroy');
Route::get('/empresaedit/{id}','CompanieController@edit');
Route::post('/empresaupdate','CompanieController@update');
Route::get('/validaterfc/{taxregime}','CompanieController@validateRFC');

Route::get('/usuarios_consultar','UserController@index');
Route::get('/usuario_registrar','UserController@create');
Route::post('/usercreate','UserController@store');
Route::get('/userdelete','UserController@destroy');
Route::get('/useredit/{id}','UserController@edit');
Route::post('/userupdate','UserController@update');

Route::get('/configuracion','ConfigurationController@index');
Route::post('/saveconfig','ConfigurationController@store');
Route::post('/updatetemplate','ConfigurationController@updateTemplate');
Route::get('/edittemplate','ConfigurationController@editTemplate');
Route::post('/loadfiles','ConfigurationController@loadfiles');
Route::post('/loadcommercial','ConfigurationController@loadcommercial');
Route::get('/createtemplate','ConfigurationController@createTemplate');
Route::get('/polizas','PeriodpoliciesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
