<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=["orderno", "orderdate", "totalamount", "notes", "status", "user_id"];
}
