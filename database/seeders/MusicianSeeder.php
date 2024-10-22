<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MusicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for musicians
        $musicians = [
            [
                'name' => 'John Doe',
                'type' => 'Solo Artist',
                'date_of_birth' => '1985-06-15',
                'nationality' => 'American',
            ],
            [
                'name' => 'Beyoncé',
                'type' => 'Solo Artist',
                'date_of_birth' => '1981-09-04',
                'nationality' => 'American',
            ],
            [
                'name' => 'Yo-Yo Ma',
                'type' => 'Orchestra',
                'date_of_birth' => '1955-10-07',
                'nationality' => 'American',
            ],
        ];

        // Insert the sample data into the musicians table
        DB::table('musicians')->insert($musicians);
    }
}
