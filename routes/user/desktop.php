<?php

use App\Http\RoleMiddleware;
use Illuminate\Support\Facades\Route;

// User Desktop routes (per-controller file)
Route::middleware([RoleMiddleware::class . ':user'])->group(function () {
    // Controller: User\DesktopController (if created later)
    Route::get('/user/desktop', function () {
        return view('user.desktop');
    })->name('user.desktop');

    // Add more user desktop controller routes here
});
