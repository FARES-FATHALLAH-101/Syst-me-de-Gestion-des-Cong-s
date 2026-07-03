<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::Get('/',[AuthController::class, 'index']);
Route::GET('/register',[AuthController::class, 'showRegister']) ->name('register');
Route::POST('/register',[AuthController::class, 'register']);

Route::Get('/login', [AuthController::class, 'showLogin']) ->name('login');
Route::Post('/login',[AuthController::class,'Login']);

Route::GET('/admin/dashboard', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
Route::GET('/employee/dashboard', [AuthController::class, 'employeeDashboard'])->name('employe.dashboard');