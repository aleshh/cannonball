<?php

namespace Cannonball;

use Illuminate\Database\Eloquent\Model;

class Serving extends Model
{
    public function beverage() {
        return $this->belongsTo(Beverage::class);
    }
}
