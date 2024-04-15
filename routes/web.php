<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [AuthController::class, 'actionSignupPage'])->name('register');
Route::post('/signup', [AuthController::class, 'actionSignup'])->name('register.post');
Route::get('/login', [AuthController::class, 'actionLoginPage'])->name('login');
Route::post('/login', [AuthController::class, 'actionLogin'])->name('login_post');
Route::get('/logout', [AuthController::class, 'actionLogout'])->name('logout');
Route::get('/chat', [MessageController::class, 'actionChatPage']);
