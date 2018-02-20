<?php

namespace Cannonball\Http\Controllers;

use Cannonball\Serving;
use Illuminate\Http\Request;

class ServingsController extends Controller
{

    public function index()
    {
        $servings = Serving::latest()->get();
        return view('servings.index', compact('servings'));
    }

    public function store(Request $request)
    {
        Serving::create(request(['beverage_id']));
        return redirect('/');
    }

}
