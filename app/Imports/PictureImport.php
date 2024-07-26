<?php

namespace App\Imports;

use App\Models\Picture;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PictureImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $pictures = [$row['dop_pole_ssylka_na_upakovku']];
        $pictures = array_merge($pictures, explode(', ', $row['dop_pole_ssylki_na_foto']));
        foreach($pictures as $key => $picture){
            try {
                $file = fopen($picture, 'r');
            }catch (\Exception $e){
                continue;
            }
            if($file){
                $filePath = $_SERVER['DOCUMENT_ROOT'].'/resources/'.$row['vnesnii_kod'].$key.'.png';
                file_put_contents($filePath, $file);
                $product = Product::where('external_code', $row['vnesnii_kod'])->first();
                Picture::create([
                    'product_id' => $product->id,
                    'ref' => $picture,
                    'path' => $filePath
                ]);
                fclose($file);
            }
        }
        return null;
    }
}
