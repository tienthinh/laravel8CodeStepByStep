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
        @php
            $message = 'login component message';
        @endphp
        <x-header title="login component header" :message="$message">
            <p>user component slot</p>
        </x-header>

        <a href="greeting">Hello page</a>
        <br><br>
        <form action="{{ route('users.login') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Enter user name" value="{{ old('username') }}" />
            <br>
            <span style="color:red">
            @error('username')
            {{ $message }}
            @enderror
            </span>
            <br>
            <input type="password" name="password" placeholder="Enter password" value="{{ old('username') }}" />
            <br>
            <span style="color:red">
            @error('password')
            {{ $message }}
            @enderror
            </span>
            <br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>