<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('index');});
Route::get('login', function () {return view('auth/login');});
Route::get('loginFace', 'BackofficeController@login')->name('login');

Route::get('backoffice/guia', 'BackofficeController@horarioGuia')->name('horarioGuia');
Route::get('backoffice/csv', 'BackofficeController@csvGenerator')->name('csvGenerator');



Route::post('/registro', 'MainController@registro')->name('registro');;
//
///Route::get('ajax',function() {return view('message');});
Route::post('/horasLibres','MainController@horasLibres');
Route::post('/vacios','MainController@vacios');
Route::get('/comoFunciona', function () {return view('comoFunciona');});

