<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
  protected $table = "message";
  public $incrementing = true;
  public $timestamps = false;
  protected $primaryKey = 'message_id';
  protected $fillable = [
    'message_email','message_telephone','message_comment','message_timestamp','message_read'
  ];
}
