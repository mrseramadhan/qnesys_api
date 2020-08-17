<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Cart_Item extends Model
{
  protected $table = 'dt_cart_item';
  protected $fillable = ['id_cart','id_order','id_service','id_food','qty','total_price','discount'];
  protected $primaryKey = 'id_cart_item';
}
