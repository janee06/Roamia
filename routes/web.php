<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/destination/london', function () {
    return view('london'); // Load the london.blade.php view
});

Route::get('/destination/france', function () {
    return view('france');
});

Route::get('/destination/japan', function () {
    return view('japan');
});

Route::get('/destination/italy', function () {
    return view('italy');
});
Route::get('/destination/usa', function () {
    return view('usa');
});
Route::get('/destination/australia', function () {
    return view('australia');
});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');