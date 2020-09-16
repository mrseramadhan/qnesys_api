<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Status_Clean_My_Room extends Model
{
  protected $table = 'tr_status_clean_my_room';
  protected $fillable = [
      'id_status_clean_my_room',
      'id_room',
      'status',
  ];
  protected $primaryKey = 'id_status_clean_my_room';

  public function room()
  {
    return $this->HasOne('App\Ms_Room','id_room','id_room');
  }
}
