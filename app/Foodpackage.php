<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodpackage extends Model
{
    protected $fillable = ['codeno','foodpackages','totalCalories','price','weight_target','type'];

    public function orders()
  {
      return $this->belongsToMany('App\Order','orderdetails')
			      ->withPivot('quantity')
			      ->withTimestamps();
  }
}
