
@extends('layout')

@section('content')

<h2>Beverages</h2>

<ul>
    @foreach ($beverages as $beverage)
        <li>
            <a href="beverages/{{$beverage->id}}">
                <strong>{{ $beverage->name }}</strong>
                ({{ $beverage->size * $beverage->strength / 100}} oz. of alcohol)
            </a>
        </li>
    @endforeach
</ul>

@endsection