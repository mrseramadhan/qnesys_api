<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Check_IO extends Model
{
  protected $table = 'tr_check_io';
  protected $fillable = ['id_hotel','id_room','id_guest','last_nik_used','last_name_used','last_email_used','last_phone_used','datetime_checkin','datetime_checkout','order_via'];
  protected $primaryKey = 'id_check_io';

}
