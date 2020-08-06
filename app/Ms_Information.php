<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Information extends Model
{
    protected $table = 'ms_information';
    protected $fillable = ['id_hotel','description','picture'];
    protected $primaryKey = 'id_information';
}
