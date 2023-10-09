<!DOCTYPE html>
<html>
    <head>
        <title>User Page</title>
        <style>
            body {
                background-color: #2D2D2D;
                color:antiquewhite;
            }
            pre {
                word-break: break-all;
                display: inline-block;
                max-width: 100%;
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
        <div>
            <h1>User list</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Profile photo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['first_name'] . ' ' . $user['last_name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td><img src="{{ $user['avatar'] }}" /></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <a href="greeting">Hello page</a>
    </body>
</html>