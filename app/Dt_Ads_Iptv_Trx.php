<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Ads_Iptv_Trx extends Model
{
    protected $table = 'dt_ads_iptv_trx';
    protected $fillable = ['id_ads_location','id_master_ads','range_time'];
    protected $primaryKey = 'id_ads_trx';
}
