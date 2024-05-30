<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$title}}</h1>
    @if(!empty($subtitle))
    <h3>{{subtitle}}</h3>
    @endif

    @if(!empty($auth))
    <h4>Ciao, bentornato, {{$auth['username']}}</h4>
    @endif
</body>
</html>