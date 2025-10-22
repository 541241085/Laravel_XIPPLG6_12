<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\LandingController;
use App\Http\COntrollers\Admin\DashboardController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});