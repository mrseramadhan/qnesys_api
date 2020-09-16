<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Hotel extends Model
{
    protected $table = 'ms_hotel';
    protected $fillable = [
        'id_hotel',
        'hotel_code',
        'id_corporation',
        'hotel_name',
        'hotel_address',
        'hotel_phone',
        'pos_code',
        'code_provinsi',
        'code_kabupaten',
        'code_kelurahan',
        'npwp',
        'pkp_npkp',
        'map_coordinate',
        'pict_map',
        'logo_hotel',
        'wallpaper'
    ];
    protected $primaryKey = 'id_hotel';
}
