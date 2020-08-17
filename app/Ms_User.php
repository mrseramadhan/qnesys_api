<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_User extends Model
{
  protected $table = 'ms_user';
  protected $fillable = ['id_user','name','username','password','id_division_privilege','id_division'];
  protected $primaryKey = 'id_user';
}
