<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if(isset($row['skidka']))
            return new Product([
                'external_code'     => $row['vnesnii_kod'],
                'name'    => $row['naimenovanie'],
                'description' => $row['opisanie'],
                'price' => $row['cena_cena_prodazi'],
                'discount' => $row['skidka']
            ]);
        else
            return new Product([
                'external_code'     => $row['vnesnii_kod'],
                'name'    => $row['naimenovanie'],
                'description' => $row['opisanie'],
                'price' => $row['cena_cena_prodazi']
            ]);
    }
}
