<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\HolokdController;
use App\Models\Holokds;

Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index');
    Route::get('users/{id}', 'show');
    Route::post('users', 'store');
    Route::patch('users/{id}', 'update');
    Route::delete('users/{id}', 'destroy');
});

Route::controller(HolokdController::class)->group(function () {
    Route::get('holokds', 'index');
    Route::get('holokds/{id}', 'show');
    Route::get('holokds/category/{id}', 'listBy');
    Route::post('holokds', 'store');
    Route::patch('holokds/{id}', 'update');
    Route::delete('holokds/{id}', 'destroy');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
});
