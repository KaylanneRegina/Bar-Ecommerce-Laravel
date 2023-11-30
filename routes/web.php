<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class,'index']);
Route::get('/products/create', [ProductController::class,'create']);
Route::get('/products/{id}', [ProductController::class,'show']);
Route::post('/products', [ProductController::class, 'store']);

Route::get('/products', function () {
return view('products');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
