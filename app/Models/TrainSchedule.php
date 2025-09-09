<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainSchedule extends Model
{
    protected $guarded = [];

    protected $casts = [
    'run_date' => 'date',
];


    public function train()
    {
        return $this->belongsTo(Train::class);
    }
}


