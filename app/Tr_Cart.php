<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Cart extends Model
{
  protected $table = 'tr_cart';
  protected $fillable = ['id_check_io','active','is_done'];
  protected $primaryKey = 'id_cart';
}
