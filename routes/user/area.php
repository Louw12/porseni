<?php

use App\Http\RoleMiddleware;
use Illuminate\Support\Facades\Route;

// User area (backwards-compatible) routes
Route::middleware([RoleMiddleware::class . ':user'])->group(function () {
    Route::get('/user-area', function () {
        return view('dashboard');
    })->name('user.area');

    // Other user-related controllers can have their own files here
});
