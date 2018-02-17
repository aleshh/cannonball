<?php

namespace Cannonball;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    // these two lines do the same thing:
    protected $fillable = ['name', 'category', 'size', 'strength'];
    protected $guarded = [];
}
