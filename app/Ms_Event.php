<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Event extends Model
{
    protected $table = 'ms_event';
    protected $fillable = ['id_hotel','lat','lng','event_name','tempat','kota','picture','description','start_at','end_at'];
    protected $primaryKey = 'id_event';
}
