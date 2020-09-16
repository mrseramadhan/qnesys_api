<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Menu_Service extends Model
{
  protected $table = 'ms_menu_service';
  protected $fillable = ['id_menu_service','id_hotel','title','picture','icon','description','direct_to_api'];
  protected $primaryKey = 'id_menu_service';
}
