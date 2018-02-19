
@extends('layouts.master')

@section('content')

  <h2>{{ $beverage->name }}</h2>

  <p>
    <strong>Category:</strong> {{ ucfirst($beverage->category) }}<br>
    <strong>Size:</strong> {{ $beverage->size }} oz.<br>
    <strong>Alcohol:</strong> {{ $beverage->strength }}%<br>
    ({{ $beverage->size * $beverage->strength / 100}} oz. of alcohol)

  </p>

  <p>
    @foreach($beverage->servings as $serving)
      Serving: {{ $serving->created_at }}
    @endforeach
  </p>

@endsection