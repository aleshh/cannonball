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

    public static function todayAlcohol() {
        $servings = Serving::where('created_at', '>=', Carbon::today())
        ->get();

        $todayAlcohol = 0;

        foreach ($servings as $serving) {
            $todayAlcohol += $serving->beverage->size *
                            $serving->beverage->strength / 100;
        }

        // round to 1 decimal place if under 10, otherwise to 0 decimal places
        if ($todayAlcohol > 9.5) {
            $todayAlcohol = round($todayAlcohol, 0);
        } else {
            $todayAlcohol = round($todayAlcohol, 1);
        }
        return $todayAlcohol;
    }
}
