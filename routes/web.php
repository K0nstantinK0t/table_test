<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::post('/', [\App\Http\Controllers\TableController::class, 'import']);
Route::get('/table', [\App\Http\Controllers\ProductController::class, 'index'])->name('table');;
Route::get('/product/{code}', [\App\Http\Controllers\ProductController::class, 'getByCode'])->name('product');;
//Route::get('products/{id}', [\App\Http\Controllers\ProductController::class, 'getById'])->name('product');
