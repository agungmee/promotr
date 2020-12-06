<?php

namespace App\Imports;

use App\PromoLedclub;
use Maatwebsite\Excel\Concerns\ToModel;

class LedclubImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PromoLedclub([
            'cust_code' => $row[0],
            'cust_name' => $row[1],
            'promo_name' => $row[2],
            'promo_period' => $row[3],
            'nilai_period' => $row[4],
            'nilai_potong' => $row[5],
        ]);
    }
}
