<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Welcome
Route::view('/', 'welcome');

// Login
Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('signup');

// Dispatcher signup
Route::get('/signup/dispatcher', [AuthController::class, 'showDispatcherForm'])->name('signup.dispatcher');
Route::post('/signup/dispatcher', [AuthController::class, 'registerDispatcher']);

// Driver signup
Route::get('/signup/driver', [AuthController::class, 'showDriverForm'])->name('signup.driver');
Route::post('/signup/driver', [AuthController::class, 'registerDriver']);

// Login / Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes
Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', function() {
        return view('dashboard.index');
    })->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Protected Routes (after login)
|--------------------------------------------------------------------------
*/

