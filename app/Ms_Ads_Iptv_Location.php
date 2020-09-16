<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Ads_Iptv_Location extends Model
{
    protected $table = 'ms_ads_iptv_location';
    protected $fillable = ['ads_location'];
    protected $primaryKey = 'id_ads_location';
}
