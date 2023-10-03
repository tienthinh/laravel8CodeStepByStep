<!DOCTYPE html>
<html>
    <head>
        <title>User Page</title>
        <style>
            body {
                background-color: #2D2D2D;
            }
            
            h1 {
                color: #C26356;
                font-size: 30px;
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
    </head>
    <body>
        <p>
            @foreach($users as $user)
                {{ $user }} <br>
            @endforeach
        </p>
        <a href="greeting">Hello page</a>
    </body>
</html>