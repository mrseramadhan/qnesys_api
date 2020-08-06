<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Galery extends Model
{
    protected $table = 'ms_galery';
    protected $fillable = ['id_category_galery','id_hotel','picture'];
    protected $primaryKey = 'id_galery';
}
