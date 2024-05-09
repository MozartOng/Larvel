<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/property', [PropertyController::class, 'index'])->name('property.index');
    Route::get('/product/create', [PropertyController::class, 'create'])->name('property.create');
    Route::post('/product', [PropertyController::class, 'store'])->name('property.store');
    Route::get('/property/{property}/edit', [PropertyController::class, 'edit'])->name('property.edit');
    Route::put('/property/{property}/update', [PropertyController::class, 'update'])->name('property.update');
    Route::delete('/property/{property}/destroy', [PropertyController::class, 'delete'])->name('property.delete');

    Route::post('/logout', ['LogoutControlle'::class, 'logout'])->name('logout');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
