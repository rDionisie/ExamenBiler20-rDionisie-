<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalObjectController;

Route::get('/', [PersonalObjectController::class, 'index'])->name('home');

Route::get('/goals', [PersonalObjectController::class, 'index'])->name('goals.index');
Route::post('/goals', [PersonalObjectController::class, 'store'])->name('goals.store');
