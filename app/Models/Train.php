<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $guarded = [];

    protected $casts = [
        'class_rates' => 'array',
    ];

    public function schedules()
    {
        return $this->hasMany(TrainSchedule::class);
    }
}

