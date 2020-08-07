<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Public_Tv extends Model
{
    protected $table = 'ms_public_tv';
    protected $fillable = ['id_hotel','urutan','detik','file_type','status','picture'];
    protected $primaryKey = 'id_public_tv';
}
