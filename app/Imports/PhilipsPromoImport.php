<?php

namespace App\Imports;

use App\DataPhilips;
use Maatwebsite\Excel\Concerns\ToModel;

class PhilipsPromoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataPhilips([
            'cust_code' => $row[0],
            'cust_name' => $row[1],
            'cust_site' => $row[2],
            'promo_name' => $row[3],
            'promo_period' => $row[4],
            'sales_name' => $row[5],
            'nilai_benefit' => $row[6],
            'nilai_realisasi' => $row[7],
        ]);
    }
}
