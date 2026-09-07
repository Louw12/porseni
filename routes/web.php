<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\RoleMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Auth routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes
Route::get('/home', function () {
    return view('dashboard');
})->middleware([RoleMiddleware::class])->name('home');

// Load per-role route files from routes/admin and routes/user directories
foreach (glob(__DIR__ . '/admin/*.php') as $file) {
    require $file;
}

foreach (glob(__DIR__ . '/user/*.php') as $file) {
    require $file;
}

