<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeaveRequestController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::Get('/',[AuthController::class, 'index']);
Route::GET('/register',[AuthController::class, 'showRegister']) ->name('register');
Route::POST('/register',[AuthController::class, 'register']);

Route::Get('/login', [AuthController::class, 'showLogin']) ->name('login');
Route::Post('/login',[AuthController::class,'Login']);

Route::GET('/admin/dashboard', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
Route::GET('/employee/dashboard', [AuthController::class, 'employeeDashboard'])->name('employee.dashboard');

Route::GET('/leave/request',[LeaveRequestController::class,'create'])->name('leave.request');
Route::post('/leave/request',[LeaveRequestController::class,'store'])->name('leave.store');

Route::GET('/leave/list',[LeaveRequestController::class,'index'])->name('leave.list');

Route::get('/leave/edit/{id}',[LeaveRequestController::class, 'edit'])->name('leave.edit');
Route::post('/leave/update/{id}',[LeaveRequestController::class, 'update'])->name('leave.update');

Route::get('/leave/cancel/{id}',[LeaveRequestController::class,'cancel'])->name('leave.cancel');

Route::GET('/leave/search',[LeaveRequestController::class,'search'])->name('leave.search');
Route::POST('/leave/search',[LeaveRequestController::class,'searchResult'])->name('leave.search.resut');

Route::GET('/logout',[AuthController::class,'logout'])->name('logout');

