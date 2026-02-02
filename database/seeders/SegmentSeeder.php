<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Segment;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $segments = [
            ['route_id' => 1, 'from_step' => 1, 'to_step' => 2, 'price' => 90.00],
            ['route_id' => 1, 'from_step' => 2, 'to_step' => 3, 'price' => 70.00],
            ['route_id' => 1, 'from_step' => 3, 'to_step' => 4, 'price' => 60.00],
            ['route_id' => 1, 'from_step' => 4, 'to_step' => 5, 'price' => 50.00],
            ['route_id' => 1, 'from_step' => 1, 'to_step' => 3, 'price' => 140.00],
            ['route_id' => 1, 'from_step' => 1, 'to_step' => 5, 'price' => 220.00],
        ];

        foreach ($segments as $segment) {
            Segment::create($segment);
        }
    }
}
