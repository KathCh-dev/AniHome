<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomepageController::class, 'homepage'])->name('homepage');
Route::get('/register', [ClientController::class, 'register'])->name('register');
Route::post('/register', [ClientController::class, 'doRegister'])->name('doRegister');
Route::get('/clientLogin', [AuthController::class, 'clientLogin'])->name('clientLogin');
Route::post('/clientLogin', [AuthController::class, 'clientDoLogin'])->name('clientDoLogin');
Route::get('/clientDashboard/{client_id}', [ClientController::class, 'clientDashboard'])->name('clientDashboard');
Route::post('/clientDashboard/{client_id}', [ClientController::class, 'updateClient'])->name('updateClient');
Route::get('/clientUpdatePassword/{client_id}', [ClientController::class, 'clientUpdatePassword'])->name('clientUpdatePassword');
Route::post('/clientUpdatePassword/{client_id}', [ClientController::class, 'updateClientPassword'])->name('updateClientPassword');
Route::get('/destroyClient/{client_id}', [ClientController::class, 'destroyClient'])->name('destroyClient');
Route::get('/petCard/{pet_id}', [PetController::class, 'petCard'])-> name('petCard');


Route::get('/adminLogin', [AuthController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLogin', [AuthController::class, 'adminDoLogin'])->name('adminDoLogin');
Route::get('/adminDashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
