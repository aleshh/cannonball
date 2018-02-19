@extends('layouts.master ')

@section('content')

<h2>What ya drinking?</h2>

@foreach ($beverages as $beverage)
    <a href="beverages/{{$beverage->id}}">
        <div class="add-serving-button">
            <h3>{{ $beverage->name }}</h3>
            ({{ $beverage->size * $beverage->strength / 100}} oz. of alcohol)
        </div>
    </a>
@endforeach

@endsection