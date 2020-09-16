<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Kabupaten extends Model
{
    protected $table = 'ms_kabupaten';
    protected $fillable = ['id_provinsi','kabupaten'];
    protected $primaryKey = 'id_kabupaten';
}
