<?php

namespace Database\Seeders;

use App\Models\Travel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Travel::create([
            'user_id' => 1,
            'title' => 'Il mio viaggio a Roma',
            'description' => 'Viaggio di quattro giorni a Roma punti di interesse e cibi tipici',
            'departure_date' => '2024-08-18 10:30:00',
            'return_date' => '2024-08-21 19:15:00'
        ]);
    }
}
