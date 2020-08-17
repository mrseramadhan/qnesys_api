<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Division_Privilege extends Model
{
  protected $table = 'ms_division_privilege';
  protected $fillable = ['id_division_privilege','division_privilege_name'];
  protected $primaryKey = 'id_division_privilege';
}
