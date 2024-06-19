<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/details/{slug}', [\App\Http\Controllers\FrontendController::class, 'details'])->name('details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/cart', [\App\Http\Controllers\FrontendController::class, 'cart'])->name('cart');
        Route::post('/cart/{id}', [\App\Http\Controllers\FrontendController::class, 'cartAdd'])->name('cart-add');
        Route::delete('/cart/{id}', [\App\Http\Controllers\FrontendController::class, 'cartDelete'])->name('cart-delete');
        Route::post('/checkout', [\App\Http\Controllers\FrontendController::class, 'checkout'])->name('checkout');
        Route::get('/checkout/success', [\App\Http\Controllers\FrontendController::class, 'success'])->name('checkout-success');
    });

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->name('dashboard.')
    ->prefix('dashboard')
    ->group(function () {
        Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('index');
        Route::resource('my-transaction', \App\Http\Controllers\MyTransactionController::class);

        Route::middleware(['admin'])->group(function () {
            Route::resource('product', \App\Http\Controllers\ProductController::class);
            Route::resource('product.gallery', \App\Http\Controllers\ProductGalleryController::class)->shallow();
            Route::resource('user', \App\Http\Controllers\UserController::class);
            Route::resource('transaction', \App\Http\Controllers\TransactionController::class);
        });
    });
