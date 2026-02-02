<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeatReservation;

class SeatReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeatReservation::create([
            'programme_id' => 1,
            'segment_id'   => 1,
            'seat_id'      => 1,
        ]);
    }
}
