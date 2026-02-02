<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programme;


class ProgrammeSeeder extends Seeder
{
    public function run(): void
    {
        Programme::create([
            'route_id'    => 1,
            'bus_id'      => 1,
            'travel_date' => '2026-02-10',
        ]);
    }
}
