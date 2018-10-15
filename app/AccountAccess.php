<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountAccess extends Model
{
   protected $table="accountaccess";
   protected $primaryKey ="idAccountAccess";

   protected $fillable=["userAccountAccess", "passwordAccountAccess", "statusAccountAccess"];

    public function AccountAccess(){
    	return $this->belongsTo(Users::class);
    }
}
