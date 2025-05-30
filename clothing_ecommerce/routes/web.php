<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
});

Route::get('/products/{type}/{product:slug}', [ProductController::class, 'show'])
    ->name('products.show');
Route::resource('products', ProductController::class)
    ->except(['show'])
    ->parameters([
        'products' => 'product:slug'
]);

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout.index');

Route::get('/orders', [OrderController::class, 'index'])
    ->name('orders.index');
Route::get('/orders/{product:slug}', [OrderController::class, 'show'])
    ->name('orders.show');
// edit and create is for admin

Route::get('/dashboard', function () {
    return view('pages/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';