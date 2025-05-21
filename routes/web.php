<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReminderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('reminders', ReminderController::class);

Route::patch('reminders/{reminder}/done', [ReminderController::class, 'markAsDone'])->name('reminders.done');
Route::patch('reminders/{reminder}/undone', [ReminderController::class, 'markAsUndone'])->name('reminders.undone');
