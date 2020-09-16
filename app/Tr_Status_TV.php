<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Status_TV extends Model
{
  protected $table = 'tr_status_tv';
  protected $fillable = [
      'id_status_tv',
      'id_room',
      'status',
  ];
  protected $primaryKey = 'id_status_tv';

  public function room()
  {
    return $this->HasOne('App\Ms_Room','id_room','id_room');
  }
}
