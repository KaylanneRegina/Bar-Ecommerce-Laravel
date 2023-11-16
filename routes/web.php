<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class,'index']);
Route::get('/products/create', [ProductController::class,'create']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
return view('products');
});

