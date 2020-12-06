<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoLedclub extends Model
{
    protected $table = 'promo_ledclub';

    protected $fillable = ['cust_code','cust_name','promo_name','promo_period','nilai_period','nilai_potong'];
}
