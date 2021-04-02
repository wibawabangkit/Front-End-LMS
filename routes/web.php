<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/boost', function () {
    Artisan::call('config:cache');
    Artisan::call('view:cache');

    dd('OK');
});

Route::get('/', function () {
    return view('welcome');
});

route::prefix('headmaster')->group(function () {
    Route::get('/calender', [\App\Http\Controllers\Headmaster\DashboardController::class, 'calender'])->name('calender.index');
    Route::get('/statistik', [\App\Http\Controllers\Headmaster\DashboardController::class, 'statistik'])->name('statistik.index');
    Route::get('/class', [\App\Http\Controllers\Headmaster\DashboardController::class, 'class'])->name('class.index');
});

route::prefix('student')->group(function () {
    Route::get('/overview', [\App\Http\Controllers\Student\DashboardController::class, 'overview'])->name('overview.index');
    Route::get('/transkip-nilai', [\App\Http\Controllers\Student\DashboardController::class, 'transkipNilai'])->name('transkip-nilai.index');
});
