<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Menu extends Model
{
  protected $table = 'ms_menu';
  protected $fillable = ['menu_name','id_menu_parent','description'];
  protected $primaryKey = 'id_menu';
}
