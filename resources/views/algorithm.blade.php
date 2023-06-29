<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            h2{
                text-align: center;
                font-size: 18px;
            }
            .result{
                padding: 10px;
                color: red;
            }
        </style>
    </head>
    <body >
        <h2>SUM MIN AND MAX</h2>
        <form action="{{route('value')}}" method="post">
            @csrf
            <input type="text" name="value" id="value" />
            <button type="submit">SUM</button>
        </form>
        <div class ="result">{{$value}}</div>
     
        <a href="{{route('joker')}}">link test2 joker</a>
     
    
    </body>
</html>
