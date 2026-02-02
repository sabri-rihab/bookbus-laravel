<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Step;

class stepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $steps = [
            ['route_id' => 1, 'station_id' => 1, 'step_order' => 1],
            ['route_id' => 1, 'station_id' => 2, 'step_order' => 2],
            ['route_id' => 1, 'station_id' => 3, 'step_order' => 3],
            ['route_id' => 1, 'station_id' => 4, 'step_order' => 4],
            ['route_id' => 1, 'station_id' => 5, 'step_order' => 5],
        ];

        foreach ($steps as $step) {
            Step::create($step);
        }
    }
}
