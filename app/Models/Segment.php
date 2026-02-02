<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Step;
class Segment extends Model
{
    protected $table = 'segment';

    protected $fillable = [
        'route_id',
        'from_step',
        'to_step',
        'price',
    ];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function fromStep()
    {
        return $this->belongsTo(Step::class, 'from_step');
    }

    public function toStep()
    {
        return $this->belongsTo(Step::class, 'to_step');
    }

}
