<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_Billing extends Model
{
    protected $table = 'tr_billing';
    protected $fillable = ['id_guest','id_check_io','total_bill','total_discount','id_promotion','id_gift','total_payment','payment'];
    protected $primaryKey = 'id_billing';
}
