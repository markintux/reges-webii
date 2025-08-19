<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'create'])->name('user.create');
Route::post('/profile', [UserController::class, 'store'])->name('user.store');

Route::resource('reminders', ReminderController::class);

Route::patch('reminders/{reminder}/done', [ReminderController::class, 'markAsDone'])->name('reminders.done');
Route::patch('reminders/{reminder}/undone', [ReminderController::class, 'markAsUndone'])->name('reminders.undone');
