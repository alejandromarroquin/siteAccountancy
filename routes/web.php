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
Route::get('/facturar',function(){
  return view('cfdi/newcfdi');
});
Route::get('/registrarempresa',function(){
  return view('users/registercompany');
});
Route::get('/registrarusuario',function(){
  return view('users/registeruser');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
