<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenerateQR;
use App\Http\Controllers\AttendanceController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('post-login', [AuthController::class, 'login'])->name('post.login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('generate-qr', [GenerateQR::class, 'showQrCodeForm'])->name('generate.qr');
Route::post('register-student', [GenerateQR::class, 'registerStudent'])->name('register.student');
Route::get('read-qr/{id}', [GenerateQR::class, 'ReadQrCode'])->name('read.qr');
Route::post('take-attendance/{id}', [AttendanceController::class, 'store'])->name('take.attendance');