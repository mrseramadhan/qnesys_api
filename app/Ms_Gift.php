<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Gift extends Model
{
    protected $table = 'ms_gift';
    protected $fillable = ['gift_name','detail','picture','start_periode','end_periode'];
    protected $primaryKey = 'id_gift';
}
