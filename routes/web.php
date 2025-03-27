<?php

use App\Models\Reminder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reminder/{title}/{description}/', function ($title, $description) {
    $date = now();
    Reminder::create([
        'title' => $title,
        'description' => $description,
    ]);
});
