<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('midtrans/callback', [\App\Http\Controllers\API\MidtransController::class, 'callback']);
