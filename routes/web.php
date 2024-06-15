<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/details/{slug}', [\App\Http\Controllers\FrontendController::class, 'details'])->name('details');
Route::get('/cart', [\App\Http\Controllers\FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout/success', [\App\Http\Controllers\FrontendController::class, 'success'])->name('checkout-success');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
