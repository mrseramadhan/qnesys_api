<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Service extends Model
{
  protected $table = 'ms_service';
  protected $fillable = ['id_hotel','service_name','id_division','description','picture','price'];
  protected $primaryKey = 'id_service';
}
