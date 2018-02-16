
@extends('layout')

@section('content')

  <h2>{{ $beverage->name }}</h2>

  <p>
    Category: {{ $beverage->category }}<br>
    Size: {{ $beverage->size }} oz.<br>
    Alcohol: {{ $beverage->strength }}%
  </p>

@endsection