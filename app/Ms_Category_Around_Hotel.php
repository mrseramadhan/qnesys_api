<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Category_Around_Hotel extends Model
{
    protected $table = 'ms_category_around_hotel';
    protected $fillable = ['id_hotel','category_name','picture'];
    protected $primaryKey = 'id_category_around_hotel';
}
