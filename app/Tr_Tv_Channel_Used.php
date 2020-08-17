<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Tv_Channel_Used extends Model
{
    protected $table = 'tr_tv_channel_used';
    protected $fillable = ['id_tv_channel','id_hotel','status'];
    protected $primaryKey = 'id_tv_channel_used'; 
}
