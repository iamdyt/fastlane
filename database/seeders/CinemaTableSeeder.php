<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Seeder;


class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cinema::create([
            'name' => 'cinema-a',
            'location' => 'Akobo',
            'showtime' => "9am-4pm"
        ]);

        Cinema::create([
            'name' => 'cinema-b',
            'location' => 'Bodija',
            'showtime' => "9am-4pm"
        ]);
    }
}
