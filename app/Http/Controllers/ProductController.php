<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index()
    {
        return view('table', ['products' => Product::all()]);
    }
    public function getByCode($code, Request $request)
    {
        return view('product', ['product' => Product::where('external_code', $code)->first()]);
    }
}
