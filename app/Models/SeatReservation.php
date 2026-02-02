<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\segment;
use App\Models\Programme;
use App\Models\Seat;

class SeatReservation extends Model
{
    protected $table = 'seat_reservation';
    protected $fillable = [
        'programme_id',
        'segment_id',
        'seat_id',
    ];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}
