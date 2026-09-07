<?php

use App\Http\RoleMiddleware;
use Illuminate\Support\Facades\Route;

// User routes (desktop/mobile)
Route::middleware([RoleMiddleware::class . ':user'])->group(function () {
    Route::get('/user/desktop', function () {
        return view('user.desktop');
    })->name('user.desktop');

    Route::get('/user/mobile', function () {
        return view('user.mobile');
    })->name('user.mobile');

    // Backwards-compatible example
    Route::get('/user-area', function () {
        return view('dashboard');
    })->name('user.area');

    // Tambahkan route user lain di sini
});
