<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
  protected $table ="product_image";
  public $incrementing = true;
  public $timestamps = false;
  protected $primaryKey = "pi_id";
  protected $fillable = ['product_id','filename'];

}
