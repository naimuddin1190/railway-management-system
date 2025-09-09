<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'pnr',
        'schedule_id',
        'name',
        'phone',
        'class',
        'passengers',
        'status',
    ];

    // Relation to TrainSchedule
    public function schedule()
    {
        return $this->belongsTo(TrainSchedule::class);
    }

    // Relation to Ticket (1 Booking -> 1 Ticket)
    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }

    // Access the Train directly through schedule
    public function train()
    {
        return $this->schedule ? $this->schedule->train : null;
    }

    // Calculate total price dynamically
    public function totalPrice()
    {
        if ($this->train && isset($this->train->class_rates[$this->class])) {
            return $this->passengers * $this->train->class_rates[$this->class];
        }
        return 0;
    }
}
