<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\auth\AuthenticatedSessionController;

// LOGIN (raiz)
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/', [AuthenticatedSessionController::class, 'store']);

// LOGOUT
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// REGISTER
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/index', [ProductController::class, 'create'])->name('products.index');


// DASHBOARD (protegido)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
