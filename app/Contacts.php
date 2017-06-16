<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = "footer_and_contacts";
    public $timestamps = false;
    protected $primaryKey = "fc_id";
    protected $fillable = ['fc_about','fc_address','fc_telp1','fc_telp2','fc_email','fc_email2'];
}
