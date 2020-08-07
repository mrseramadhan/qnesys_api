<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Kelurahan extends Model
{
    protected $table = 'ms_kelurahan';
    protected $fillable = ['id_kabupaten','kelurahan'];
    protected $primaryKey = 'id_kelurahan';
}
