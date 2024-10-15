<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

// Route untuk halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('handleRegister');

// Route untuk halaman Welcome
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

