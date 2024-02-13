<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [AuthController::class, 'loginView'])->name('auth.login')->middleware('guest');
Route::get('/register', [AuthController::class, 'registerView'])->name('auth.register')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('auth.newlogin')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('auth.newregister')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
Route::get('/forgetPassword', [AuthController::class, 'forgetPassword'])->name('auth.forgetPassword')->middleware('guest');




