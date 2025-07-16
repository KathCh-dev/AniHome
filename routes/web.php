<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [ClientController::class, 'register'])-> name('register');
Route::post('/register', [ClientController::class, 'doRegister'])->name('doRegister');
Route::get('/clientLogin', [AuthController::class, 'clientLogin'])->name('clientLogin');
Route::post('/clientLogin', [AuthController::class, 'clientDoLogin'])->name('clientDoLogin');
Route::get('/clientDashboard', [ClientController::class, 'clientDashboard'])->name('clientDashboard');
Route::get('/adminLogin', [AuthController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLogin', [AuthController::class, 'adminDoLogin'])->name('adminDoLogin');
Route::get('/adminDashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
