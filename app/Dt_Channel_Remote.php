<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dt_Channel_Remote extends Model
{
    protected $table = 'dt_channel_remote';
    protected $fillable = ['id_tv_channel','status'];
    protected $primaryKey = 'id_channel_remote';  
}
