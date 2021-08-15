<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
</head>
<body>
    City :{{$weather['name']}}
    <br>
    Weather :{{$weather['main']['temp']}}
    <br>
    Feels Like  :{{$weather['main']['feels_like']}}
    
    
</body>
</html>