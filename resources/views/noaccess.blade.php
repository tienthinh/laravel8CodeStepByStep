<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <style>
        body {
            background-color: #2D2D2D;
            color: white;
        }
        
        h1, h2 {
            color: #C26356;
            font-family: Menlo, Monaco, fixed-width;
        }
        
        p {
            color: white;
            font-family: "Source Code Pro", Menlo, Monaco, fixed-width;
        }
        a {
            color: rgb(206,102,7);
        }
    </style>
    <body>
        <h1>You cannot access here</h1>
        <a href="{{ route('homepage') }}">Go to Homepage</a>
    </body>
</html>