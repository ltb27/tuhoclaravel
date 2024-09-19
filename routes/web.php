<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/admin/login', [UserController::class, 'index'])->name('auth.login')->middleware("auth.login");

Route::post('/admin/login', [UserController::class, 'login'])->name('auth.post-login');

Route::get('/admin/logout', [UserController::class, 'logout'])->name('auth.logout');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware("auth.dashboard");