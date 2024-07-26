<?php

namespace App\Http\Controllers;

use App\Imports\AddFieldsImport;
use App\Imports\PictureImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;
use Illuminate\Support\Facades\DB;
class TableController extends Controller
{
    public function import(Request $request){
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('add_fields')->truncate();
        DB::table('pictures')->truncate();
        DB::table('products')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Excel::import(new ProductImport(), request()->file('table'), 'local', \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new AddFieldsImport(), request()->file('table'), 'local', \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new PictureImport(), request()->file('table'), 'local', \Maatwebsite\Excel\Excel::XLSX);
        return view('home', ['tableLoaded' => true]);
    }
}
