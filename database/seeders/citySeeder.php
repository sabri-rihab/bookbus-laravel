<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Agadir',
            'Marrakech',
            'Settat',
            'Casablanca',
            'Rabat',
            'Kenitra',
            'Fes',
            'Tanger',
            'El Jadida',
            'Oujda',
        ];

        foreach ($cities as $city){
            City::firstOrCreate(['name'=> $city]);
        }
    }
}
