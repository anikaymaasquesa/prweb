<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountAccess extends Model
{
   protected $table="accountaccess";

   protected $filable=["userAccountAccess", "passwordAccountAccess", "statusAccountAccess"];
}
