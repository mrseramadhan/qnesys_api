<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Food extends Model
{
  protected $table = 'ms_food';
  protected $fillable = ['id_food_category','food_name','chef_name','description','picture','price','available_qty'];
  protected $primaryKey = 'id_food';
}
