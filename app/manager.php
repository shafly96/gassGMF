<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
  protected $table = "manager";
  public $incrementing = true;
  public $timestamps = false;
  protected $primaryKey = 'id';
  protected $fillable = [
    'manager_nama','manager_jabatan','manager_filename'
  ];
}
