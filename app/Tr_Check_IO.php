<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Check_IO extends Model
{
  protected $table = 'tr_check_io';
  protected $fillable = ['id_check_io','id_guest'];
  protected $primaryKey = 'id_check_io';

}
