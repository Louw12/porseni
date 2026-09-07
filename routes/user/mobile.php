<?php

use App\Http\RoleMiddleware;
use Illuminate\Support\Facades\Route;

// User Mobile routes (per-controller file)
Route::middleware([RoleMiddleware::class . ':user'])->group(function () {
    // Controller: User\MobileController (if created later)
    Route::get('/user/mobile', function () {
        return view('user.mobile');
    })->name('user.mobile');

    // Add more user mobile controller routes here
});
