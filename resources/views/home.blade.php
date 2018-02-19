@extends('layouts.master ')

@section('content')

<h2>What ya drinking?</h2>

@foreach ($beverages as $beverage)
    <form method="POST" action="/servings">
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $beverage->id }}">

        <button type="submit" class="add-serving-button">
            <h3>{{ $beverage->name }}</h3>
            ({{ $beverage->size }}oz., {{ $beverage->strength }}%)

        </button>

    </form>

@endforeach

@endsection