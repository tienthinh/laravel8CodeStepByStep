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
        <a href="users">Users</a><br>
        <a href="about">About</a>
    </body>
</html>