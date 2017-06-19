<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AftersalesImage extends Model
{
  protected $table = "after_sales_image";
  public $incrementing = true;
  public $timestamps = false;
  protected $primaryKey = 'asi_id';
  protected $fillable = [
    'filename','as_id'
  ];
}
