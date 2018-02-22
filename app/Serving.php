<?php

namespace Cannonball;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Serving extends Model
{

    protected $fillable = ['beverage_id'];

    public function beverage() {
        return $this->belongsTo(Beverage::class);
    }

    public static function todayCount() {
        return Serving::where('created_at', '>=', Carbon::today())
            ->get()
            ->count();
    }
}
