<?php

use App\Http\RoleMiddleware;
use Illuminate\Support\Facades\Route;

// Admin-only routes
Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    // Tambahkan route admin lain di sini
});
