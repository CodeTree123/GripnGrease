<?php

//admin section start

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[AdminLoginController::class,'showLoginForm'])->name('admin.login');
Route::post('/login', [AdminLoginController::class,'login'])->name('admin.login.submit');
Route::get('/',[AdminController::class,'dashboard'] )->name('admin.dashboard');
Route::get('/logout', [AdminLoginController::class,'logout'])->name('admin.logout');




//admin profile
	Route::get('/admin-profile',[UserController::class,'profile'])->name('admin.profile');
	Route::post('/admin-updateProfile',[UserController::class,'updateProfile'])->name('admin.updateProfile');
	Route::post('/update-password',[UserController::class,'updatepassword'])->name('admin.updatepassword');

