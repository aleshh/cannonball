<?php

namespace Cannonball;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    public function alcoholAmount() {

        return 10;
    }
}
