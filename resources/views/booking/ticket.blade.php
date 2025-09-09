@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Your Ticket</h3>

    <p><strong>PNR:</strong> {{ $booking->pnr }}</p>
    <p><strong>Main Passenger Name:</strong> {{ $booking->ticket->passenger_name ?? $booking->name }}</p>
    <p><strong>Main Passenger Phone:</strong> {{ $booking->phone }}</p>
    <p><strong>Train:</strong> {{ $booking->schedule->train->name }}</p>
    <p><strong>Journey Date:</strong> {{ $booking->schedule->run_date->format('d-m-Y') }}</p>
    <p><strong>Class:</strong> {{ $booking->ticket->class ?? $booking->class }}</p>
    <p><strong>Passengers:</strong> {{ $booking->ticket->quantity ?? $booking->passengers }}</p>

    <p><strong>Extra Passengers Info:</strong></p>
    @if($booking->extra_passengers && count($booking->extra_passengers) > 0)
        <ul>
            @foreach($booking->extra_passengers as $idx => $p)
                <li>Passenger {{ $idx + 2 }}: {{ $p['name'] }} ({{ $p['phone'] }})</li>
            @endforeach
        </ul>
    @else
        <p>None</p>
    @endif

    <p><strong>Total Price:</strong> {{ ($booking->passengers * 200) }} Taka</p>
    <p><strong>Payment Method:</strong> {{ $booking->payment_method }}</p>
    <p><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>

    <a href="{{ route('booking.download', $booking->pnr) }}" class="btn btn-primary mt-3">Download PDF</a>
</div>
@endsection
