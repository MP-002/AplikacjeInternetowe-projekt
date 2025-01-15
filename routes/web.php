<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FishingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::resource('admin', AdminController::class);
Route::resource('fishings', FishingController::class);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/showregister', [LoginController::class, 'showregister'])->name('showregister');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/login.check', [LoginController::class, 'check'])->name('login.check');
Route::post('/login.check', [LoginController::class, 'check'])->name('login.check');
Route::get('/', function () {
    return redirect()->route('fishings.index');
});

