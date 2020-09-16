<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Status_AC extends Model
{
  protected $table = 'tr_status_ac';
  protected $fillable = [
      'id_status_ac',
      'id_room',
      'status',
  ];
  protected $primaryKey = 'id_status_ac';

  public function room()
  {
    return $this->HasOne('App\Ms_Room','id_room','id_room');
  }
}
