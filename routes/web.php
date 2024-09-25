<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('pdf', PdfController::class)->name('pdf');

require __DIR__.'/auth.php';
