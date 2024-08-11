<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenerateQR;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Mail;

Route::get('/send-test-email', function () {
    Mail::raw('This is a simple test email', function ($message) {
        $message->to('kuku.assefa18@gmail.com')
                ->subject('Simple Test Email');
    });
    return 'Test email sent!';
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('post-login', [AuthController::class, 'login'])->name('post.login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('generate-qr', [GenerateQR::class, 'showQrCodeForm'])->name('generate.qr');
Route::post('register-student', [GenerateQR::class, 'registerStudent'])->name('register.student');
Route::get('read-qr/{id}', [GenerateQR::class, 'ReadQrCode'])->name('read.qr');
Route::get('show-users-list', [ReportController::class, 'showUsersList'])->name('show.users.list');
Route::get('report/daily', [ReportController::class, 'dailyReport'])->name('report.daily');
Route::get('report/weekly', [ReportController::class, 'weeklyReport'])->name('report.weekly');
Route::get('report/monthly', [ReportController::class, 'monthlyReport'])->name('report.monthly');
Route::get('report/yearly', [ReportController::class, 'yearlyReport'])->name('report.yearly');
Route::post('take-attendance/{id}', [AttendanceController::class, 'store'])->name('take.attendance');