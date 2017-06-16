<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public $timestamps = false;
    protected $primaryKey = "customer_id";
    protected $fillable = ['customer_filename','customer_name'];
}
