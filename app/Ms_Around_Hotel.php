<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Around_Hotel extends Model
{
    protected $table = 'ms_around_hotel';
    protected $fillable = ['id_hotel','name','picture','description','range','grouping'];
    protected $primaryKey = 'id_around_hotel';
}
