
@extends('layout')

@section('content')

  <h2>{{ $beverage->name }}</h2>

  <p>
    <strong>Category:</strong> {{ ucfirst($beverage->category) }}<br>
    <strong>Size:</strong> {{ $beverage->size }} oz.<br>
    <strong>Alcohol:</strong> {{ $beverage->strength }}%<br>
    ({{ $beverage->size * $beverage->strength / 100}} oz. of alcohol)

  </p>

@endsection