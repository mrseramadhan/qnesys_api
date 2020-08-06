<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Room extends Model
{
  protected $table = 'ms_room';
  protected $fillable = [
      'id_room_category',
      'no_room',
      'status',
  ];
  protected $primaryKey = 'id_room';

  public function room_category()
  {
    return $this->HasOne('App\Ms_Room_Category','id_room_category','id_room_category');
  }
}
