<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $beverage->name }}</title>
</head>
<body>
<h1>Cannonball</h1>
  <p>
    <a href="/beverages">Beverages</a> <a href="/about">About</a>
  </p>

  <h2>{{ $beverage->name }}</h2>

  <p>
    Category: {{ $beverage->category }}<br>
    Size: {{ $beverage->size }} oz.<br>
    Alcohol: {{ $beverage->strength }}%
  </p>
</body>
</html>