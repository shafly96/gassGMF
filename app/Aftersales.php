<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aftersales extends Model
{
  protected $table = "after_sales";
  public $incrementing = true;
  public $timestamps = false;
  protected $primaryKey = 'as_id';
  protected $fillable = [
    'as_company_name','as_contact_name','as_email','as_serial','as_product_type','as_out','as_description','as_timestamp'
  ];
}
