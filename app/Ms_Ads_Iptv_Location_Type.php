<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Ads_Iptv_Location_Type extends Model
{
    protected $table = 'ms_ads_iptv_location_type';
    protected $fillable = ['ads_location_type'];
    protected $primaryKey = 'id_ads_location_type';
}
