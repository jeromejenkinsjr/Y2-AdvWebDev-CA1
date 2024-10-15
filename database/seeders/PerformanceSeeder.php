<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Performance;


class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $currentTimestamp = Carbon::now();

    Performance::insert([
        [
            'event_id' => 1,
            'musician_id' => 1,
            'composer' => 'Ludwig van Beethoven',
            'piece' => 'Symphony No. 5',
            'duration' => '00:40:00',
            'image' => 'images/beethoven_symphony_5.jpg',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'event_id' => 2,
            'musician_id' => 2,
            'composer' => 'Wolfgang Amadeus Mozart',
            'piece' => 'Requiem',
            'duration' => '01:00:00',
            'image' => 'images/mozart_requiem.jpg',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'event_id' => 3,
            'musician_id' => 1,
            'composer' => 'Johann Sebastian Bach',
            'piece' => 'Brandenburg Concerto No. 3',
            'duration' => '00:15:00',
            'image' => 'images/bach_brandenburg.jpg',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
    ]);
}

}
