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
            'cust_name' => $row[0],
            'cust_site' => $row[1],
            'cust_address' => $row[2],
            'sales_id' => $row[3],
            'sales_name' => $row[4],
            'cust_category' => $row[5],
        ]);
    }
}
