<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainSchedule;

class TrainController extends Controller
{
    public function schedule(Request $request)
    {
        $cities = ['Dhaka','Chattogram',"Cox's Bazar",'Khulna','Sylhet','Rajshahi','Comilla','Feni','Bogra','Narsingdi'];

        $query = TrainSchedule::with('train');

        if ($request->filled('from') && $request->filled('to')) {
            $query->whereHas('train', function($q) use ($request) {
                $q->where('source', $request->from)
                  ->where('destination', $request->to);
            });
        }

        if ($request->filled('date')) {
            $query->whereDate('run_date', $request->date);
        }

        $schedules = $query->get();

        return view('trains.schedule', compact('schedules','cities'));
    }
}

