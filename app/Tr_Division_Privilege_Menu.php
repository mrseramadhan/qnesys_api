<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Division_Privilege_Menu extends Model
{
    protected $table = 'tr_division_privilege_menu';
    protected $fillable = ['id_menu','id_division_privilege'];
    protected $primaryKey = 'id_division_privilege_menu';
}
