<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerformanceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/performances/{id}', [PerformanceController::class, 'show'])->name('performances.show');


Route::middleware('auth')->group(function () {
    Route::resource('performances', PerformanceController::class);
    Route::get('performances', [PerformanceController::class, 'index'])->name('performances.index');

});
require __DIR__.'/auth.php';
