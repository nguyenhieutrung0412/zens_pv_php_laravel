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
        
            <input type="text" name="value" id="value" placeholder="VD: 1 2 3 4 5" />
            <button type="submit" id="submit">SUM</button>
        
        <div class ="result" id="result">0</div>
        <div class ="result" id="error"></div>
     
        <a href="{{route('joker')}}">link test2 joker</a>
     
    
    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/1.1.9/js/libs/jquery-1.10.2.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
