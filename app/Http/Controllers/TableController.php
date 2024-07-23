<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\TableImport;
use Maatwebsite\Excel\Facades\Excel;
class TableController extends Controller
{
    public function import(Request $request){
//        Excel::import(new TableImport(), request()->file('table'), 'local', \Maatwebsite\Excel\Excel::XLSX);
        return view('home', ['tableLoaded' => true]);
    }
}
