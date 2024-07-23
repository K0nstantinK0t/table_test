<?php

namespace App\Imports;

use App\Models\Table;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class TableImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Product([
            'external_code'     => $row['Внешний код'],
            'name'    => $row['Наименование'],
            'description' => $row['Описание'],
            'price' => $row['Цена: Цена продажи'],
            'discount' => $row['Скидка'],
        ]);
    }
}
