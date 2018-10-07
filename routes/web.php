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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Rutas para el login
Route::get("login.html",["as"=>"login.index","uses"=>"LoginController@index"]);
Route::post("listingCity.html",["as"=>"login.listingCity","uses"=>"LoginController@listingCity"]);
Route::post("registre.htm",["as"=>"login.registerUser","uses"=>"LoginController@store"]);