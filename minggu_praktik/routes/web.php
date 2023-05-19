<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarPrestasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(DaftarPrestasiController::class)->prefix('daftarPrestasi')->group(function () {
        Route::get('', 'index')->name('daftarPrestasi');
        Route::get('create', 'create')->name('daftarPrestasi.create');
        Route::post('store', 'store')->name('daftarPrestasi.store');
        Route::get('show/{id}', 'show')->name('daftarPrestasi.show');
        Route::get('edit/{id}', 'edit')->name('daftarPrestasi.edit');
        Route::put('edit/{id}', 'update')->name('daftarPrestasi.update');
        Route::delete('destroy/{id}', 'destroy')->name('daftarPrestasi.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});


