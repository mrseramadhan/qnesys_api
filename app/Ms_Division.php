<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Division extends Model
{
    protected $table = 'ms_division';
    protected $fillable = ['id_hotel','division_name','description'];
    protected $primaryKey = 'id_division';
}
