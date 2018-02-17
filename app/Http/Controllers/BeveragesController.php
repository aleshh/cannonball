<?php

namespace Cannonball\Http\Controllers;

use Illuminate\Http\Request;
use Cannonball\Beverage;

class BeveragesController extends Controller
{
    public function index() {
        $beverages = Beverage::all();
        return view('beverages.index', compact('beverages'));
    }

    public function show(Beverage $beverage) {
        return view('beverages.show', compact('beverage'));
    }

    public function create() {
        return view('beverages.create');
    }

    public function store() {

        // dd(request(['name', 'size']));

        $beverage = new Beverage;
        $beverage->name = request('name');
        $beverage->category = request('category');
        $beverage->size = request('size');
        $beverage->strength = request('strength');

        $beverage->save();

        return redirect('/');
    }
}
