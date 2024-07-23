<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::post('/', [\App\Http\Controllers\TableController::class, 'import']);
