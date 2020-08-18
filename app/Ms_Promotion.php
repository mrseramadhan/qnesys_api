<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Promotion extends Model
{
    protected $table = 'ms_promotion';
    protected $fillable = ['promotion_name','description','picture','id_hotel','start_at','end_at'];
    protected $primaryKey = 'id_promotion';
}
