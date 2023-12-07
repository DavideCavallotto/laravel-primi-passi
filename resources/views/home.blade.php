<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravello</title>
</head>
<body>
    @include('header')
    <p>Mi chiamo {{ $name }} {{ $surname }} e sono {{ $age }}</p>
    <a href="{{route('hello')}}">Vai a Hello</a>
    <a href="{{route('world')}}">Vai a World</a>

    
    
</body>
</html>