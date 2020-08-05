<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Check_IO_Access extends Model
{
  protected $table = 'dt_check_io_access';
  protected $fillable = ['id_check_io','id_guest','active'];
  protected $primaryKey = 'id_check_io_access';

  public function guest()
  {
    return $this->HasOne('App\Ms_Guest','id_guest','id_guest');
  }

  public function check_io()
  {
    return $this->HasOne('App\Tr_Check_Io','id_check_io','id_check_io');
  }

}
