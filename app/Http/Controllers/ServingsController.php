<?php

namespace Cannonball\Http\Controllers;

use Cannonball\Serving;
use Illuminate\Http\Request;

class ServingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servings = Serving::all();
        return view('servings.index', compact('servings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Cannonball\Serving  $serving
     * @return \Illuminate\Http\Response
     */
    public function show(Serving $serving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Cannonball\Serving  $serving
     * @return \Illuminate\Http\Response
     */
    public function edit(Serving $serving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Cannonball\Serving  $serving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serving $serving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Cannonball\Serving  $serving
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serving $serving)
    {
        //
    }
}
