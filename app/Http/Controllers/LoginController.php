<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use App\Countries;
use App\States;
use App\Users;
use App\AccountAccess;
use Carbon\Carbon;
use App\Mail\ResponseAccountEmail;
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
         $countriesAll=Countries::all();
   		if(isset($countries->idCountry)){   			
   			$userExist=Users::where("emailUser","=",$data['email'])->get();
   			$accountExist=AccountAccess::where("userAccountAccess","=",$data['email'])->get();
   			if($userExist->isEmpty() && $accountExist->isEmpty()){               
   				AccountAccess::create([
                  "userAccountAccess"=>$data['email'], 
                  "passwordAccountAccess"=>bcrypt($data['password']), 
                  "statusAccountAccess"=>0,
               ]);
               $account=AccountAccess::all();
               $lastAccess=$account->last();
               $date=explode("/", $data['dateOfBirth']);
   				Users::create([
                  "idSocialNetwork"=>5,
                  "idTypeUser"=>2,
                  "idAccountAccess"=>$lastAccess->idAccountAccess,
                  "idCountry"=>$countries->idCountry,
                  "idState"=>$data['city'],
                  "nameUser"=>$data['name'],
                  "lastNameUsuario"=>$data['lastname'],
                  "emailUser"=>$data['email'],
                  "ageUser"=>'',
                  "dateOfBirthUser"=>$date[2]."-".$date[1]."-".$date[0],
               ]);
               $response["error"]="no";
               $response["message"]=trans("front_lang.MESSAGE_TO_REGISTRATE_ACCOUNT");
               $response["status"]="alert-success";
               $response['contentMessage']="Correcto!";
               $response['content']=$countriesAll; 
               $mailResponse=[
                  'name'=>$data['name'].' '.$data['lastname'],
                  'mail'=>$data['email'],
               ]; 
               Mail::to($data['email'])->send(new  ResponseAccountEmail($mailResponse));             
   			}else{
   				$response['error']="yes";
   				$response["message"]=trans("front_lang.MESSAGE_TO_ERROR_CREATE_ACCOUNT");
   				$response['contentMessage']="Error!";
               $response["status"]="alert-danger";
               $response['content']=$countriesAll;
   			}
   		}else{
   			$response['error']="yes";
   			$response["message"]=trans("front_lang.EMPTY_VALUE");
   			$response['content']=array();
            $response["status"]="alert-danger"; 
   		}
         
         return back()->with('response',$response);
      }

      public function activateAccount($email){
         $response=array();
         if (!empty($email)) {
            $correo=base64_decode($email);
            $userInfo=AccountAccess::where("userAccountAccess",$correo)->first();
            if ($userInfo->statusAccountAccess==0) {
                  $result=DB::table("accountaccess")
                         ->where("idAccountAccess",$userInfo->idAccountAccess)
                         ->update(["statusAccountAccess"=>1,"updated_at"=>Carbon::now()]);
                  $response["error"]="no";
                  $response["message"]=>'';
                  $response["content"]=>array();
                  $response["status"]=>'';       
            }else{
               $response["error"]="yes";
               $response["message"]=>'';
               $response["content"]=>array();
               $response["status"]=>'';
            }
         }else{
            $response["error"]="no";
            $response["message"]=>'';
            $response["content"]=>array();
            $response["status"]=>'';
         }
         return view();
      }
}
