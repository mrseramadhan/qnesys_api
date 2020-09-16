<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_Guest extends Model
{
    protected $table = 'ms_guest';
    protected $fillable = ['nik','guest_name','address','pos_code','code_provinsi','code_kabupaten','code_kelurahan','phone','email','gender','birthdate','photo','scan_ktp'];
    protected $primaryKey = 'id_guest';
}
