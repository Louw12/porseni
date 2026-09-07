<?php

use App\Http\RoleMiddleware;
use Illuminate\Support\Facades\Route;

// Admin Dashboard routes (per-controller file)
Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    // Controller: Admin\DashboardController (if created later)
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    // Add more admin controller routes here (one file per controller recommended)
});
