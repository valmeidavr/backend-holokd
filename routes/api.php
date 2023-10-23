<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;

Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index');
    Route::get('users/{id}', 'show');
    Route::post('users', 'store');
    Route::patch('users/{id}', 'update');
    Route::delete('users/{id}', 'destroy');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
});
