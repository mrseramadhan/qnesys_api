<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Smart_Switch extends Model
{
    protected $table = 'dt_smart_switch';
    protected $fillable = [
      'id_room',
      'kode_produk',
      'ip_address',
      'type_koneksi',
      'mqtt_topic',
      'mqtt_username',
      'mqtt_password',
  ];
  protected $primaryKey = 'id_smart_switch';
}