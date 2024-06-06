<?php

use App\Livewire\EditGuests;
use App\Livewire\ShowExtras;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Route::get('/', function () {
    return view("welcome");
})->middleware('web');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/guests/{guest}', ShowExtras::class)->name('extras.show');
Route::get('/guests/{guest}/edit', EditGuests::class)->name('guests.edit');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
