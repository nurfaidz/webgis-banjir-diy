<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = [];

    public function floodZones()
    {
        return $this->hasMany(FloodZone::class);
    }
}
