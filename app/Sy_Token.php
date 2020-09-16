<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sy_Token extends Model
{
  protected $table = 'sy_token';
  protected $fillable = ['token','id_user','active'];
  protected $primaryKey = 'token';
}
