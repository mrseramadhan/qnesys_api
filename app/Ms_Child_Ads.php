<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Child_Ads extends Model
{
    protected $table = 'ms_child_ads';
    protected $fillable = ['id_master_ads','id_hotel','nama_produk','file','active'];
    protected $primaryKey = 'id_child_ads';
}
