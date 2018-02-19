
@extends('layouts.master ')

@section('content')

  <h2>Servings</h2>

  @foreach ($servings as $serving)

    <div class="show-serving">
      Serving:<br>
      {{ $serving->beverage->name }}
      <br>
      {{ $serving->created_at->diffForHumans() }}
    </div>
    <br>

  @endforeach


@endsection