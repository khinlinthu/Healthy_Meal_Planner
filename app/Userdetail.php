<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
   protected $fillable = ['gender','height','weight','age','exercise','weight_target']; 
}
