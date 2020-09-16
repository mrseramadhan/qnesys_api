<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Around_Hotel extends Model
{
    protected $table = 'ms_around_hotel';
    protected $fillable = ['id_hotel','name','picture','description','lat','lng','range','id_category_around_hotel'];
    protected $primaryKey = 'id_around_hotel';
}
