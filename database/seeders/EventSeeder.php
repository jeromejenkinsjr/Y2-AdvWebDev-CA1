<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::insert([
            [
                'name' => 'Beethoven Concert',
                'event_date' => '2024-10-22', 
                'start_time' => '19:00:00',  
                'end_time' => '21:00:00',     
                'location' => 'Concert Hall',  
                'description' => 'A night of Beethoven’s greatest hits.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mozart Concert',
                'event_date' => '2024-11-05', 
                'start_time' => '18:00:00',   
                'end_time' => '20:00:00',     
                'location' => 'Opera House',   
                'description' => 'An evening of Mozart’s masterpieces.', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bach Concert',
                'event_date' => '2024-12-10', 
                'start_time' => '20:00:00',   
                'end_time' => '22:00:00',     
                'location' => 'Symphony Center', 
                'description' => 'A celebration of Bach’s works.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}