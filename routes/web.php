<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::GET('/register',[AuthController::class, 'showRegister']);
Route::POST('/register',[AuthController::class, 'register']);