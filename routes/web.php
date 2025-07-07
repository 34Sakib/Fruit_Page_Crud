<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    Route::get('/fruits', [FruitsController::class, 'index'])->name('fruits.index');
    Route::get('/fruits/create', [FruitsController::class, 'create'])->name('fruits.create');
    Route::post('/fruits', [FruitsController::class, 'store'])->name('fruits.store');
    Route::get('/fruits/{fruits}/edit', [FruitsController::class, 'edit'])->name('fruits.edit');
    Route::put('/fruits/{fruits}/update', [FruitsController::class, 'update'])->name('fruits.update');
    Route::delete('/fruits/{fruits}/destroy', [FruitsController::class, 'destroy'])->name('fruits.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
