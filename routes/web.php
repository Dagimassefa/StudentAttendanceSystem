<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('post-login', [AuthController::class, 'login'])->name('post.login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

