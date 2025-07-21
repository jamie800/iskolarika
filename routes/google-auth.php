<?php

use Illuminate\Support\Facades\Route;

Route::get('/auth/google', [App\Http\Controllers\GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [App\Http\Controllers\GoogleAuthController::class, 'callbackGoogle']);
