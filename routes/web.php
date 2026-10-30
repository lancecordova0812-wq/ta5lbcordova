<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
