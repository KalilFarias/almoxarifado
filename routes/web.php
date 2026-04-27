<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Redirecionamento inicial
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => redirect()->route('login'));

/*
|--------------------------------------------------------------------------
| Rotas AUTENTICADAS
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Materiais (Products)
    |--------------------------------------------------------------------------
    */
    Route::resource('product', ProductController::class);

    /*
    |--------------------------------------------------------------------------
    | Requisições
    |--------------------------------------------------------------------------
    */
    Route::get('/requests/create', function () {
        return view('request');
    })->name('requests.create');

    Route::post('/requests', [RequestController::class, 'store'])
        ->name('requests.store');

    Route::get('/requests/{id}', [RequestController::class, 'show'])
        ->name('requests.show');

    /*
    |--------------------------------------------------------------------------
    | Perfil
    |--------------------------------------------------------------------------
    */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Auth (Laravel Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';
