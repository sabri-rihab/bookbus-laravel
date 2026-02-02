<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bus;

class Programme extends Model
{
    protected $table = 'programme';
    protected $fillable = [
        'route_id',
        'bus_id',
        'travel_date',
    ];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
