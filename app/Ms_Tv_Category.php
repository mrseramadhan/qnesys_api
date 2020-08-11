<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Tv_Category extends Model
{ 
    protected $table = 'ms_tv_category';
    protected $fillable = ['description']; 
    protected $primaryKey = 'id_tv_category'; 
}
