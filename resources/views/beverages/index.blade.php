<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cannonball</title>
</head>
<body>
    <h1>Cannonball</h1>
    <p><a href="/about">About</a></p>

    <ul>
        @foreach ($beverages as $beverage)
            <li>
                <a href="beverages/{{$beverage->id}}">
                    {{ $beverage->name }}
                    {{ $beverage->alcoholAmount() }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>