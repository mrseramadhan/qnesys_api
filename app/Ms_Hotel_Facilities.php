<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Hotel_Facilities extends Model
{
    protected $table = 'ms_hotel_facilities';
    protected $fillable = ['id_facilities_category','facilities_name','picture','description'];
    protected $primaryKey = 'id_facilities';
}
