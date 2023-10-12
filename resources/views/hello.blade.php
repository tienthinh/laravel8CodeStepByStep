<!DOCTYPE html>
<html>
    <head>
        <title>Hello Page</title>
        <style>
            body {
                background-color: #2D2D2D;
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
    </head>
    <body>
        <x-header title="greeting component header" />
        <p>Hello World!</p>
        <a href="{{ route('users.index') }}">Users</a><br>
        <a href="about">About</a><br>
        <a href="{{ route('users.add')}}">Add user</a><br>
        <a href="{{ route('users.login')}}">Login</a><br>
    </body>
</html>