<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = "homepage";
    public $timestamps = false;
    protected $primaryKey = "homepage_id";
    protected $fillable =['homepage_slogan','homepage_gambar','homepage_slogan_subtext'];
}
