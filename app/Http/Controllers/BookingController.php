<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\TrainSchedule;
use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    // Show booking form
    public function create(TrainSchedule $schedule)
    {
        return view('booking.create', compact('schedule'));
    }

    // Store booking
    public function store(Request $request)
    {
        $data = $request->validate([
            'schedule_id' => 'required|exists:train_schedules,id',
            'name' => 'required|string',
            'phone' => 'required|string',
            'class' => 'required|string',
            'passengers' => 'required|integer|min:1',
        ]);

        $schedule = TrainSchedule::with('train')->findOrFail($data['schedule_id']);

        // Seat availability check
        $class_column = 'seats_' . strtolower($data['class']); // ex: seats_ac
        if ($schedule->$class_column < $data['passengers']) {
            return back()->with('error', 'Not enough seats available in ' . $data['class'] . ' class.');
        }

        DB::transaction(function () use ($data, $schedule, &$booking, $class_column) {
            // Decrement seats
            $schedule->decrement($class_column, $data['passengers']);

            // Create Booking
            $booking = Booking::create([
                'pnr' => strtoupper(uniqid('PNR')),
                'schedule_id' => $data['schedule_id'],
                'name' => $data['name'],
                'phone' => $data['phone'],
                'class' => $data['class'],
                'passengers' => $data['passengers'],
                'status' => 'confirmed',
            ]);

            // Create Ticket
            Ticket::create([
                'booking_id' => $booking->id,
                'passenger_name' => $data['name'],
                'class' => $data['class'],
                'quantity' => $data['passengers'],
                'total_price' => $data['passengers'] * $schedule->train->class_rates[$data['class']],
            ]);
        });

        return redirect()->route('booking.ticket', $booking->pnr);
    }

    // Show ticket by PNR
    public function ticket($pnr)
    {
        $booking = Booking::with('schedule.train', 'ticket')->where('pnr', $pnr)->firstOrFail();
        return view('booking.ticket', compact('booking'));
    }

    // Download ticket PDF
    public function downloadTicket($pnr)
    {
        $booking = Booking::with('schedule.train', 'ticket')->where('pnr', $pnr)->firstOrFail();
        $ticket = $booking->ticket;

        $pdf = PDF::loadView('booking.ticket_pdf', compact('booking', 'ticket'));
        return $pdf->download('ticket_'.$booking->pnr.'.pdf');
    }
}
