<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Category_Food extends Model
{
  protected $table = 'ms_category_food';
  protected $fillable = ['id_hotel','food_category','picture','open_time','close_time'];
  protected $primaryKey = 'id_food_category';
}
