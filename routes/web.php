<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactMessageController::class, 'create']);
    // ->middleware(['auth', 'verified'])
    // ->name('dashboard');

Route::post ('/contact', [ContactMessageController::class, 'store']);
    // ->middleware(['auth', 'verified'])
    // ->name('dashboard');

Route::resource('/skills', SkillController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
