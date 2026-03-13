<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return file_get_contents(public_path('index.html'));
})->name('home');

// Rutas de productos
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

// Rutas del carrito
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');

// Rutas de checkout
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.index');
Route::post('/checkout', [App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.process');

// Rutas de administración de productos
Route::get('/admin/products', [App\Http\Controllers\AdminProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/create', [App\Http\Controllers\AdminProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [App\Http\Controllers\AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{id}/edit', [App\Http\Controllers\AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{id}', [App\Http\Controllers\AdminProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{id}', [App\Http\Controllers\AdminProductController::class, 'destroy'])->name('admin.products.destroy');
