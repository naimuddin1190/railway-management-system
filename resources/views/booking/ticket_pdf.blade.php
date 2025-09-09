<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ticket {{ $booking->pnr }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
        }
        .ticket {
            max-width: 700px;
            margin: 30px auto;
            background: #fff;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        .header {
            background: #004aad;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .section {
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
        }
        .section:last-child {
            border-bottom: none;
        }
        .section h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
            color: #004aad;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }
        .row strong {
            color: #333;
        }
        ul {
            padding-left: 20px;
            margin: 0;
        }
        .footer {
            background: #f1f1f1;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="header">Train Ticket</div>

        <div class="section">
            <h3>Passenger Info</h3>
            <div class="row"><strong>Main Passenger:</strong> {{ $booking->ticket->passenger_name ?? $booking->name }}</div>
            <div class="row"><strong>Phone:</strong> {{ $booking->phone }}</div>
            <div class="row"><strong>Extra Passengers:</strong></div>
            @if($booking->extra_passengers && count($booking->extra_passengers) > 0)
                <ul>
                    @foreach($booking->extra_passengers as $idx => $p)
                        <li>Passenger {{ $idx + 2 }}: {{ $p['name'] }} ({{ $p['phone'] }})</li>
                    @endforeach
                </ul>
            @else
                <div class="row">None</div>
            @endif
        </div>

        <div class="section">
            <h3>Train Info</h3>
            <div class="row"><strong>Train:</strong> {{ $booking->schedule->train->name }}</div>
            <div class="row"><strong>From:</strong> {{ $booking->schedule->train->source }}</div>
            <div class="row"><strong>To:</strong> {{ $booking->schedule->train->destination }}</div>
            <div class="row"><strong>Journey Date:</strong> {{ $booking->schedule->run_date->format('d-m-Y') }}</div>
            <div class="row"><strong>Class:</strong> {{ $booking->ticket->class ?? $booking->class }}</div>
            <div class="row"><strong>Passengers:</strong> {{ $booking->ticket->quantity ?? $booking->passengers }}</div>
        </div>

        <div class="section">
            <h3>Payment & Status</h3>
            <div class="row"><strong>Total Price:</strong> {{ ($booking->passengers * 200) }} Taka</div>
            <div class="row"><strong>Payment Method:</strong> {{ $booking->payment_method }}</div>
            <div class="row"><strong>Status:</strong> {{ ucfirst($booking->status) }}</div>
            <div class="row"><strong>PNR:</strong> {{ $booking->pnr }}</div>
        </div>

        <div class="footer">
            Thank you for booking with us! Have a safe journey.
        </div>
    </div>
</body>
</html>
