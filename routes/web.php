<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


// Display a listing of the products
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
// to create a new product
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

// to post a new product
Route::post('/product', [ProductController::class,'store'])->name('product.store');

// to edit a product
Route::get('/product/{product}/edit', [ProductController::class,'edit'])->name('product.edit');

 // to update a product
Route::put('/product/{product}/update', [ProductController::class,'update'])->name('product.update');

// to delete a product
Route::delete('/product/{product}/destroy', [ProductController::class,'destroy'])->name('product.destroy');

// Display the specified product
Route::get('/product/{product}/show', [ProductController::class, 'show'])->name('product.show');
