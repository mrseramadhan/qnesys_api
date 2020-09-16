<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Smart_Lock extends Model
{
  protected $table = 'dt_smart_lock';
  protected $fillable = [
    'id_room',
    'kode_produk',
    'mac_address',
    'type_koneksi',
];
protected $primaryKey = 'id_smart_lock';

}
