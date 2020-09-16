<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Category_Galery extends Model
{
    protected $table = 'ms_category_galery';
    protected $fillable = ['category_galery_name','id_hotel'];
    protected $primaryKey = 'id_category_galery';
}
