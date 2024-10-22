<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::insert([
            ['id' => 1, 'name' => 'Beethoven Concert', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Mozart Concert', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Bach Concert', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
