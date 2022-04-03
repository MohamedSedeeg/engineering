<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserEngineering extends Model
{
    protected $fillable = ['id','name','email','academy','phone','engineering_number','password'];
   // protected $hidden = [];
   // public $timestamps = false;
}
