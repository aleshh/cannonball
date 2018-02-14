<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Cannonball\Beverage;

Route::get('/beverages', function () {

    // $beverages = DB::table('beverages')->get();

    $beverages = Beverage::all();

    return view('beverages.index', compact('beverages'));
});

Route::get('beverages/{id}', function($id){

    // $beverage = DB::table('beverages')->find($id);

    $beverage = Beverage::find($id);

    return view('beverages.show', compact('beverage'));
});

Route::get('about', function() {
    return view('about');
});