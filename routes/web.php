<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Role-Based Central Dispatcher
Route::get('/dashboard', function () {
    $role = auth()->user()->role ?? 'employee';

    return match ($role) {
        'manager' => redirect()->route('manager.dashboard'),
        'hr'      => redirect()->route('hr.dashboard'),
        default   => redirect()->route('employee.dashboard'),
    };
})->middleware(['auth', 'verified'])->name('dashboard');

// Protected Role Routes
Route::middleware(['auth'])->group(function () {
    // Employee Routes
    Route::get('/employee/dashboard', function () {
        return view('employee.dashboard');
    })->name('employee.dashboard');

    // Manager Routes
    Route::get('/manager/dashboard', function () {
        return view('manager.dashboard');
    })->name('manager.dashboard');

    // HR Routes
    Route::get('/hr/dashboard', function () {
        return view('hr.dashboard');
    })->name('hr.dashboard');

    // Default Breeze Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';