<?php

namespace App\Http\Controllers;
use DB;
use App\Countries;
use App\States;
use App\Users;
use App\AccountAccess;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   

   public function index(){
   	$countries=Countries::all();
   	$response=array();
   	if(!$countries->isEmpty()){
   		$response['error']="no";
   		$response["message"]=trans("front_lang.NOT_EMPTY_VALUE");
   		$response['content']=$countries;
   	}else{
   		$response['error']="yes";
   		$response["message"]=trans("front_lang.EMPTY_VALUE");
   		$response['content']=array();
   	}
   	return view("system.admin.login",compact("response"));
   }

   public function listingCity(Request $request){
   	$idCountry=$request->all();
   	$response=array();
   	$countries=Countries::where("acronymCountry","=",$idCountry)->first();
   	//dd($countries->idCountry);
   		if(isset($countries->idCountry)){
   			$states=States::where("idCountry","=",$countries->idCountry)->get();
   			if(!$states->isEmpty()){
   				$response['error']="no";
   				$response["message"]=trans("front_lang.NOT_EMPTY_VALUE");
   				$response['content']=$states;
   			}else{
   				$response['error']="yes";
   				$response["message"]=trans("front_lang.EMPTY_VALUE");
   				$response['content']=array();
   			}
   		}else{
   			$response['error']="yes";
   			$response["message"]=trans("front_lang.EMPTY_VALUE");
   			$response['content']=array();
   		}
   	return $response;
   }

   public function store(Request $request){
   	$data=$request->all();   
   		$countries=Countries::where("acronymCountry","=",$data['country'])->first();
   		if(isset($countries->idCountry)){   			
   			$userExist=Users::where("emailUser","=",$data['email'])->get();
   			$accountExist=AccountAccess::where("userAccountAccess","=",$data['email'])->get();
   			if($userExist->isEmpty() && $accountExist->isEmpty()){
   				$account= new AccountAccess;
   				$account->userAccountAccess=$data['email']; 
   				$account->passwordAccountAccess=bcrypt($data['password']); 
   				$account->statusAccountAccess=0;
   				$account->save();
   				dd($userExist->isEmpty());
   				$user= new Users;
   				$user->idSocialNetwork=5; 
   				$user->idTypeUser=2; 
   				$user->idAccountAccess=0; 
   				$user->idCountry=$countries->idCountry; 
   				$user->idState=$data['city']; 
   				$user->nameUser=$data['name']; 
   				$user->lastNameUsuario=$data['lastname']; 
   				$user->emailUser=$data['email']; 
   				$user->ageUser=''; 
   				$date=explode("/", $data['dateOfBirth']);
   				$user->dateOfBirthUser=$date[2]."-".$date[1]."-".$date[0];
   				$user->save();

   			}else{
   				$response['error']="yes";
   				$response["message"]=trans("front_lang.EMPTY_VALUE");
   				$response['content']=array();
   			}
   		}else{
   			$response['error']="yes";
   			$response["message"]=trans("front_lang.EMPTY_VALUE");
   			$response['content']=array();
   		}  		
   }
}
