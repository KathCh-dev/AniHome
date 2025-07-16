<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'register'])-> name('register');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('clientDashboard', [AuthController::class, 'clientDashboard'])->name('clientDashboard');