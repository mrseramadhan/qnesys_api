<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Provinsi extends Model
{
    protected $table = 'ms_provinsi';
    protected $fillable = ['provinsi'];
    protected $primaryKey = 'id_provinsi';
}
