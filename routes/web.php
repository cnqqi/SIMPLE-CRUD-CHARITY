<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalangDana502Controller;
use App\Http\Controllers\Donasi482Controller;
use App\Http\Controllers\Volunteer493Controller;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk galang dana
Route::middleware(['auth'])->group(function () {
    Route::get('/galang-dana/create', [GalangDana502Controller::class, 'create'])->name('form.galangdana');
    Route::post('/galang-dana/store', [GalangDana502Controller::class, 'store'])->name('galangDana.store');
    Route::get('/galang-dana', [GalangDana502Controller::class, 'index'])->name('galangDana.index');
    Route::get('/galang-dana/edit/{id}', [GalangDana502Controller::class, 'edit'])->name('galangDana.edit'); // Rute untuk halaman edit
    Route::put('/galang-dana/update/{id}', [GalangDana502Controller::class, 'update'])->name('galangDana.update'); // Rute untuk mengupdate data
    Route::delete('/galang-dana/{id}', [GalangDana502Controller::class, 'destroy'])->name('galangDana.destroy');
});

// Rute untuk Donasi482
Route::middleware(['auth'])->group(function () {
    Route::get('donasi482/create', [Donasi482Controller::class, 'create'])->name('form.donasi482');
    Route::post('donasi482/store', [Donasi482Controller::class, 'store'])->name('donasi482.store');
    Route::get('donasi482', [Donasi482Controller::class, 'index'])->name('donasi482.index');
    Route::get('donasi482/edit/{id}', [Donasi482Controller::class, 'edit'])->name('donasi482.edit');
    Route::put('donasi482/update/{id}', [Donasi482Controller::class, 'update'])->name('donasi482.update');
    Route::delete('donasi482/{id}', [Donasi482Controller::class, 'destroy'])->name('donasi482.destroy');
});

// Rute untuk Volunteer493
Route::middleware(['auth'])->group(function () {
    Route::get('volunteer493/create', [Volunteer493Controller::class, 'create'])->name('form.volunteer493');
    Route::post('volunteer493/store', [Volunteer493Controller::class, 'store'])->name('volunteer493.store');
    Route::get('volunteer493', [Volunteer493Controller::class, 'index'])->name('volunteer493.index');
    Route::get('volunteer493/edit/{id}', [Volunteer493Controller::class, 'edit'])->name('volunteer493.edit');
    Route::put('volunteer493/update/{id}', [Volunteer493Controller::class, 'update'])->name('volunteer493.update');
    Route::delete('volunteer493/{id}', [Volunteer493Controller::class, 'destroy'])->name('volunteer493.destroy');
});
