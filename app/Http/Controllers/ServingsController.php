<?php

namespace Cannonball\Http\Controllers;

use Cannonball\Serving;
use Cannonball\Beverage;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ServingsController extends Controller
{

    public function index()
    {
        $servings = Serving::where('created_at', '>=', Carbon::today())->latest()->get();
        $oldServings = Serving::where('created_at', '<', Carbon::today())->latest()->get();

        return view('servings.index', compact('servings', 'oldServings'));
    }

    public function store(Request $request)
    {
        Serving::create(request(['beverage_id']));

        $beverage = Beverage::find(request('beverage_id'));
        $beverage->updated_at = Carbon::now();
        $beverage->save();

        return redirect('/');
    }

}
