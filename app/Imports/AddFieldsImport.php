<?php

namespace App\Imports;

use App\Models\AddFields;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AddFieldsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $product = Product::where('external_code', $row['vnesnii_kod'])->first();
        return new AddFields([
            'product_id' => $product->id,
            'size'     => $row['dop_pole_razmer'],
            'color'    => $row['dop_pole_cvet'],
            'brand' => $row['dop_pole_brend'],
            'composition' => $row['dop_pole_sostav'],
            'count' => $row['dop_pole_kol_vo_v_upakovke'],
            'seo_title' => $row['dop_pole_seo_title'],
            'seo_h1' => $row['dop_pole_seo_h1'],
            'seo_description' => $row['dop_pole_seo_description'],
            'weight' => $row['dop_pole_ves_tovarag'],
            'width' => $row['dop_pole_sirinamm'],
            'height' => $row['dop_pole_vysotamm'],
            'length' => $row['dop_pole_dlinamm'],
            'package_weight' => $row['dop_pole_ves_upakovkig'],
            'package_width' => $row['dop_pole_sirina_upakovkimm'],
            'package_height' => $row['dop_pole_vysota_upakovkimm'],
            'package_length' => $row['dop_pole_dlina_upakovkimm'],
            'category' => $row['dop_pole_kategoriia_tovara'],
        ]);
    }
}
