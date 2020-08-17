<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Billing_Item extends Model
{
  protected $table = 'dt_billing_item';
  protected $fillable = ['id_billing','id_service','id_food','id_hotel_room_category','id_cart_item','used_price','qty','total_price','id_promotion','promotion_discount','id_gift','gift_discount','total_discount','promo'];
  protected $primaryKey = 'id_billing_item';
}
