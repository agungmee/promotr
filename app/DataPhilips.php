<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPhilips extends Model
{
    protected $table = 'data_philips';

    protected $fillable = ['cust_site','promo_by_year','cust_code','cust_name','promo_name','promo_periode','promo_paket','p_led','t_led','p_dwlight','t_dwlight','p_wifi','t_wifi','image1','image2','image3','image4','image5','image6','nilai_benefit','validation','last_updated_by'];
}
