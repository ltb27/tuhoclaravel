<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
//|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Auth
Route::get('/admin/login', [AuthController::class, 'index'])->name('auth.login')->middleware("auth.login");

Route::post('/admin/login', [AuthController::class, 'login'])->name('auth.post-login');

Route::get('/admin/logout', [AuthController::class, 'logout'])->name('auth.logout');

//User
Route::group(['prefix' => "admin/user", "middleware" => "auth.dashboard"], function () {
    Route::get("", [UserController::class, "index"])->name("user.index");
    Route::get("create", [UserController::class, "create"])->name("user.create");
});


//Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware("auth.dashboard");

Route::get('/admin/demo', [DashboardController::class, 'demo']);
