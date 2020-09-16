<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Kecamatan extends Model
{
    protected $table = 'ms_kecamatan';
    protected $fillable = ['id_kabupaten','kecamatan'];
    protected $primaryKey = 'id_kecamatan';
}
