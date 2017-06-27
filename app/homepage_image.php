<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homepage_image extends Model
{
    protected $table = "homepage_image";
    protected $primaryKey = "homepage_image_id";
    public $timestamps = false;
    protected $fillable = ['homepage_gambar,homepage_id'];
}
