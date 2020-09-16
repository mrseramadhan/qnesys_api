<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Room_Category extends Model
{
  protected $table = 'ms_room_category';
  protected $fillable = [
      'id_hotel',
      'room_type',
      'description',
      'status',
      'price'
  ];
  protected $primaryKey = 'id_room_category';

  public function hotel()
  {
    return $this->HasOne('App\Ms_Hotel','id_hotel','id_hotel');
  }
}
