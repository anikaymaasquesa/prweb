<?php

namespace App\Http\Controllers;
use DB;
use App\Countries;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   

   public function index(){
   	$countries=Countries::all();
   	return view("system.admin.login",compact("countries"));
   }

   public function listingCity(Request $request){
   	$idCountry=$request->all();
   	echo $idCountry;
   }
}
