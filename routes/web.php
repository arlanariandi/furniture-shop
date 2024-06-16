<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/details/{slug}', [\App\Http\Controllers\FrontendController::class, 'details'])->name('details');
Route::get('/cart', [\App\Http\Controllers\FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout/success', [\App\Http\Controllers\FrontendController::class, 'success'])->name('checkout-success');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->name('dashboard.')
    ->prefix('dashboard')
    ->group(function () {
        Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('index');

        Route::middleware(['admin'])->group(function () {
            Route::resource('product', \App\Http\Controllers\ProductController::class);
        });
    });
