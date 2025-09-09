<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use App\Models\TrainSchedule;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    public function run()
    {
        $cities = [
            'Dhaka','Chattogram',"Cox's Bazar",'Khulna','Sylhet','Rajshahi','Comilla','Feni','Bogra','Narsingdi'
        ];

        $trainNumber = 700; // Starting train number

        foreach ($cities as $source) {
            foreach ($cities as $destination) {
                if ($source === $destination) continue; // Skip same city

                $trainNumber++;

                // Create Train
                $train = Train::create([
                    'name' => $source . ' to ' . $destination . ' Express',
                    'number' => (string)$trainNumber,
                    'source' => $source,
                    'destination' => $destination,
                    'distance' => rand(100, 500), // Random distance, you can adjust manually
                    'class_rates' => ['AC'=>5, 'Sleeper'=>3, 'General'=>1]
                ]);

                // Create Train Schedule
                TrainSchedule::create([
                    'train_id' => $train->id,
                    'run_date' => Carbon::today(),
                    'departure_time' => '07:00:00',
                    'arrival_time' => '12:00:00',
                    'seats_ac' => 50,
                    'seats_sleeper' => 100,
                    'seats_general' => 200,
                ]);
            }
        }

        $this->command->info('All train routes have been seeded successfully!');
    }
}
