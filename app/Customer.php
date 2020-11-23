<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['cust_name','cust_site','cust_address','sales_id','sales_name','cust_category'];
}
