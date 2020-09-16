<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Status_Light extends Model
{
  protected $table = 'tr_status_light';
  protected $fillable = [
      'id_status_light',
      'id_room',
      'status',
  ];
  protected $primaryKey = 'id_status_light';

  public function room()
  {
    return $this->HasOne('App\Ms_Room','id_room','id_room');
  }
}
