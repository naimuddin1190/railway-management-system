<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'booking_id', 'passenger_name', 'class', 'quantity', 'total_price'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function trainSchedule()
    {
        return $this->booking->schedule();
    }
}
