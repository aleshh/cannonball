<?php

namespace Cannonball;

use Illuminate\Database\Eloquent\Model;

class Serving extends Model
{

    protected $fillable = ['beverage_id'];

    public function beverage() {
        return $this->belongsTo(Beverage::class);
    }
}
