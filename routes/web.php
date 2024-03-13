<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [AuthController::class, 'loginView'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'registerView'])->name('register')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('newlogin')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('newregister')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');


