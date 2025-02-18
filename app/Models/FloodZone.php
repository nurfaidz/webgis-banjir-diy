<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FloodZone extends Model
{
    protected $guarded = [];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
