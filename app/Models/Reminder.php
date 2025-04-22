<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $fillable = [
        'title',
        'description',
        'remind_at',
        'done'
    ];

    protected $casts = [
        'remind_at' => 'datetime',
        'done' => 'boolean',
    ];

}
