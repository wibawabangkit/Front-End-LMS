<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/boost', function () {
    Artisan::call('config:cache');
    Artisan::call('view:cache');

    dd('OK');
});

Route::redirect('/', '/dashboard', 301);

Route::get('/dashboard', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth.index');

route::prefix('headmaster')->group(function () {
    Route::get('/calender', [\App\Http\Controllers\Headmaster\DashboardController::class, 'calender'])->name('calender.index');
    Route::get('/statistik', [\App\Http\Controllers\Headmaster\DashboardController::class, 'statistik'])->name('statistik.index');
    Route::get('/class', [\App\Http\Controllers\Headmaster\DashboardController::class, 'class'])->name('class.index');
});

route::prefix('student')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Student\DashboardController::class, 'dashbord'])->name('dashboard.index');
    Route::get('/transkip-nilai', [\App\Http\Controllers\Student\DashboardController::class, 'transkipNilai'])->name('transkip-nilai.index');
});

route::prefix('teacher')->group(function () {
    Route::get('/calendar-akademic', [\App\Http\Controllers\Teacher\DashboardController::class, 'calendar'])->name('teacher.calendar-akademic.index');
    Route::get('/class', [\App\Http\Controllers\Teacher\DashboardController::class, 'overviewClass'])->name('teacher.class.index');
    Route::get('/teacher', [\App\Http\Controllers\Teacher\DashboardController::class, 'overviewTeacher'])->name('teacher.index');
});
