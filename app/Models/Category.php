<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image'
    ];

    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }

}
