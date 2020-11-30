<?php

namespace App\Imports;

use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class ListCustomerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'cust_code' => $row[0],
            'cust_name' => $row[1],
            'cust_site' => $row[2],
            'cust_address' => $row[3],
            'sales_id' => $row[4],
            'sales_name' => $row[5],
            'cust_category' => $row[6],
        ]);
    }
}
