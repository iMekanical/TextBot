<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'datingtextbot.index');


//Route::view('/', 'welcome');



Route::view('dflowbite', 'dashboard')

    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');