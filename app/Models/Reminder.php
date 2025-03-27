<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $fillable = [
        'title',
        'description',
        'reminder_at',
        'done'
    ];

    protected $casts = [
        'reminder_at' => 'datetime',
        'done' => 'boolean',
    ];

}
