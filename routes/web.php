<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('dashboard');

Route::get('/products', [ProductController::class, 'getProducts'])->name('products');

Route::post('add/product', [ProductController::class, 'addProduct'])->name('add_product');

Route::get('edit/product/{id}', [ProductController::class, 'editProduct'])->name('edit_product');

Route::post('update/product/{id}', [ProductController::class, 'update'])->name('update_product');

Route::get('delete/post/{id}', [ProductController::class, 'deletePost'])->name('delete_product');



Route::get('add_product', function () {
    return view('addProduct');
});