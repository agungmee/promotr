<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['cust_code','cust_name','cust_site','cust_address','sales_code','sales_name','cust_category','ktp_image','npwp_image','sppkp_image','toko_image','owner_image'];
}
