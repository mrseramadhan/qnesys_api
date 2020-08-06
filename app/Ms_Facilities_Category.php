<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Facilities_Category extends Model
{
    protected $table = 'ms_facilities_category';
    protected $fillable = ['id_hotel','category_facilities_name','picture'];
    protected $primaryKey = 'id_facilities_category';
}
