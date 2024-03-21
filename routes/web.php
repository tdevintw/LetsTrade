<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ProfileController;

//open for all
Route::get('getCities/{country}', [ProfileController::class,'getCities'])->name('getCities');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/logout', function(){
  return   view('errors.404');
} );

//guest users 

Route::middleware('guest')->group(function () {
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::get('/register', [AuthController::class, 'registerView'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('newlogin');
Route::post('/register', [AuthController::class, 'register'])->name('newregister');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('/google/redirect', [App\Http\Controllers\Auth\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\Auth\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

});


//authentificated users

Route::middleware('auth')->group(function(){
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::resource('profile',ProfileController::class);
});


//admin users 

Route::middleware('auth', 'CheckRole:admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class);
    Route::resource('users', UserController::class);
    Route::post('users/access', [UserController::class, 'access'])->name('users.access');
    Route::post('users/role', [UserController::class, 'role'])->name('users.role');

});


