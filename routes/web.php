<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
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
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/cart/calculate-frete', [CartController::class, 'calculateFrete'])->name('cart.calculateFrete');
Route::post('/checkout', [PaymentController::class, 'processPayment'])->name('checkout.process');

});

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';
