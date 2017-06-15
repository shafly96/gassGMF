<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "berita";
    public $incrementing = true;
    public $timestamps = false;
    protected $primaryKey = 'berita_id';
    protected $fillable = [
      'berita_text','berita_title','berita_date','berita_filename'
    ];
}
