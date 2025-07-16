<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'register'])-> name('register');
Route::post('/register', [AuthController::class, 'doRegister'])->name('doRegister');
Route::get('/clientLogin', [AuthController::class, 'clientLogin'])->name('clientLogin');
Route::post('/clientLogin', [AuthController::class, 'clientDoLogin'])->name('clientDoLogin');
Route::get('/clientDashboard', [AuthController::class, 'clientDashboard'])->name('clientDashboard');
Route::get('/adminLogin', [AuthController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLogin', [AuthController::class, 'adminDoLogin'])->name('adminDoLogin');
Route::get('/adminDashboard', [AuthController::class, 'adminDashboard'])->name('adminDashboard');
