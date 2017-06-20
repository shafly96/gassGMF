<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table ="reviews";
    public $incrementing = true;
    public $timestamps = false;
    protected $primaryKey = "reviews_id";
    protected $fillable = ['reviews_name','reviews_title','reviews_description','reviews_product_id'];
}
