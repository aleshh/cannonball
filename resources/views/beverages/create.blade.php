
@extends('layouts.master')

@section('content')

<h2>Add a Beverage</h2>
<style>
  .input-form {
    margin-bottom: 10px;
  }
  .input-form label {
    display: block;
    margin-bottom: -5px;
  }
  .input-form input {
    font-size: 20px;
    padding-left: 5px;
  }
  .submit-button {
    font-size: 15px;
    padding: 5px 20px;
    border-radius: 5px;
    background-color: rgb(63, 159, 255);
    color: white;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-top: 10px;
  }
</style>

<form method="POST" action="/beverages" >

  {{ csrf_field() }}

  <div class="input-form">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Type of Drink">
  </div>

  <div class="input-form">
    <label for="category">Category</label>
    <input type="text" name="category" id="category" placeholder="Beer/Wine/Whiskey/etc.">
  </div>

  <div class="input-form">
    <label for="size">Size</label>
    <input type="text" name="size" id="size" placeholder="Ounces">
  </div>

  <div class="input-form">
    <label for="strength">Strength</label>
    <input type="text" name="strength" id="strength" placeholder="% alcohol">
  </div>

  <button type="submit" class="submit-button">Submit</button>
</form>

@include('layouts.errors')

@endsection