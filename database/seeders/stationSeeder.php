<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Station;

class stationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stations = [
            ['name' => 'Agadir Gare', 'city_id' => 1],
            ['name' => 'Marrakech Gare', 'city_id' => 2],
            ['name' => 'Settat Gare', 'city_id' => 3],
            ['name' => 'Casa Voyageurs', 'city_id' => 4],
            ['name' => 'Rabat Gare', 'city_id' => 5],
            ['name' => 'Kenitra Gare', 'city_id' => 6],
        ];

        foreach ($stations as $station) {
            Station::create($station);
        }
    }
}
