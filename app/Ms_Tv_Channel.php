<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Tv_Channel extends Model
{ 
    protected $table = 'ms_tv_channel';
    protected $fillable = ['id_tv_category','channel_name','description','status','logo','url'];
    protected $primaryKey = 'id_tv_channel'; 
}
 