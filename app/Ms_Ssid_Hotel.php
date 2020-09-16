<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Ssid_Hotel extends Model
{
    protected $table = 'ms_ssid_hotel';
    protected $fillable = ['id_hotel','lantai','ssid','password'];
    protected $primaryKey = 'id_ssid_hotel';
}
