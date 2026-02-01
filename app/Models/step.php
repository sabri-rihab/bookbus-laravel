<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class step extends Model
{
    protected $table = 'step';

    protected $fillable = [
        'route_id',
        'station_id',
        'step_order',
    ];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
