<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="product";
    public $incrementing = true;
    public $timestamps = false;
    protected $primaryKey = "product_id";
    protected $fillable = ['product_name','product_description','product_specification','product_tipe'];
}
