<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Ads extends Model
{
    protected $table = 'ms_ads';
    protected $fillable = ['id_hotel','nama_produk','file','active'];
    protected $primaryKey = 'id_master_ads';
}
