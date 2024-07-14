<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Produtos
Route::get('/produtos/categoria/{category}', [ProductController::class, 'list'])->name('product.list');
Route::get('/produto/{id}', [ProductController::class, 'show'])->name('products.show');
//Cart
Route::middleware('auth')->group(function () {
Route::get('/sacola', [CartController::class, 'sacola'])->name('sacola');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {return view('dashboard.dashboard');})->name('dashboard');
});

require __DIR__.'/auth.php';
