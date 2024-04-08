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
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilterController;


//open for all

Route::get('getCities/{country}', [ProfileController::class,'getCities'])->name('getCities');
Route::get('getSubcategories/{category}', [PostController::class,'getSubcategories'])->name('getSubcategories');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/post/{post}', [HomeController::class, 'show'])->name('post.show');
Route::get('/logout', function(){
  return   view('errors.404');
} );
Route::get('/discover', [FilterController::class, 'index'])->name('discover.index');
Route::get('/discover/search', [FilterController::class, 'search'])->name('discover.search');
Route::get('/discover/filter', [FilterController::class, 'filter'])->name('discover.filter');
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
    Route::delete('/image/{image}', [PostController::class, 'deleteImage'])->name('deleteImage');
    Route::resource('profile',ProfileController::class);
    Route::resource('posts',PostController::class);

});


//admin users 

Route::middleware('auth', 'CheckRole:admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/posts', [DashboardController::class, 'posts'])->name('dashboard.posts');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class);
    Route::resource('users', UserController::class);
    Route::post('users/access', [UserController::class, 'access'])->name('users.access');
    Route::post('users/role', [UserController::class, 'role'])->name('users.role');
    Route::put('posts/access/{post}', [DashboardController::class, 'access'])->name('posts.access');

    

});


