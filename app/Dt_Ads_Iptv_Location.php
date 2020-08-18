<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Ads_Iptv_Location extends Model
{
    protected $table = 'dt_ads_iptv_location';
    protected $fillable = ['id_ads_location_type','id_ads'];
    protected $primaryKey = 'id_ads_location';
}
