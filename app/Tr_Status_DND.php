<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Status_DND extends Model
{
  protected $table = 'tr_status_dnd';
  protected $fillable = [
      'id_status_dnd',
      'id_room',
      'status',
  ];
  protected $primaryKey = 'id_status_dnd';

  public function room()
  {
    return $this->HasOne('App\Ms_Room','id_room','id_room');
  }
}
