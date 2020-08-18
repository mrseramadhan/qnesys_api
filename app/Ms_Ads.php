<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Ads extends Model
{
    protected $table = 'ms_ads';
    protected $fillable = ['id_hotel','nama_produk','file_type','timer','position','type','range_time','active'];
    protected $primaryKey = 'id_ads';
}
