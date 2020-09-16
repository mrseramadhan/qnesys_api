<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Room_Hardware extends Model
{
  protected $table = 'dt_room_hardware';
  protected $fillable = [
      'id_room',
      'jenis_hardware',
      'nama_hardware',
      'koneksi',
      'bluetooh_mac_address',
      'topic_mqtt',
      'mqtt_username',
      'mqtt_password',
      'ip_address',
      'status'
  ];
  protected $primaryKey = 'id_room_hardware';

  public function room()
  {
    return $this->HasOne('App\Ms_Room','id_room','id_room');
  }
}
