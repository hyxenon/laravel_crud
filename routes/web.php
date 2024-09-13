<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index']);
Route::resource('products', ProductController::class);
Route::get('/products/create', [ProductController::class, 'create'])->name('create_product'); // Papunta sa UI
Route::post('/products/store', [ProductController::class, 'store'])->name('store_product'); // Pang save ng product sa DB
