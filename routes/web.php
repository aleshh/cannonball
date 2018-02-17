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

Route::redirect('/', 'beverages');

Route::get('beverages', 'BeveragesController@index');
// Route::get('beverages/{beverage}', 'BeveragesController@show');
Route::get('beverages/create', 'BeveragesController@create');

Route::get('about', function() {
    return view('about');
});