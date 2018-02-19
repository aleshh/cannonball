
@extends('layouts.master ')

@section('content')

  <h2>Servings</h2>

  @foreach ($servings as $serving)


  @endforeach

  <p><a href="beverages/create">Add a beverage</a></p>

@endsection