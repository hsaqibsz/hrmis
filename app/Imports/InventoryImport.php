<?php

namespace App\Imports;

use App\Inventory;
use Maatwebsite\Excel\Concerns\ToModel;

class InventoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Inventory([

            'Voucher_reference'     => $row['Voucher_reference'],
            'Item'   => $row['Item'],
            'Qty'   => $row['Qty'],
            'Category'   => $row['Category'],
            'Funded_by'   => $row['Funded_by'],
            'Model_serial'   => $row['Model_serial'],
            'Date_purchase'   => $row['Date_purchase'],
            'Currency'   => $row['Currency'],
            'Price'   => $row['Price'],
            'Total'   => $row['Total'],
            'Region_file'   => $row['Region_file'],
            'Asset_condition'   => $row['Asset_condition'],
            'Tag'   => $row['Tag'],
            'As_per_record'   => $row['As_per_record'],
            'Verified'   => $row['Verified'],
            'Difference'   => $row['Difference'],
            'Remarks'   => $row['Remarks'],
            


            
        ]);
    }
}
