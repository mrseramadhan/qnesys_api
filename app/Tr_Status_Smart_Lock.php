<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Status_Smart_Lock extends Model
{
  protected $table = 'tr_status_smart_lock';
  protected $fillable = [
      'id_status_smart_lock',
      'id_room',
      'status',
  ];
  protected $primaryKey = 'id_status_smart_lock';

  public function room()
  {
    return $this->HasOne('App\Ms_Room','id_room','id_room');
  }
}
