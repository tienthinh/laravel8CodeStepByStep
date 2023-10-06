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
            $message = 'user component message';
        @endphp
        <x-header title="user component header" :message="$message">
            <p>user component slot</p>
        </x-header>
        <p>
            User with ID 1: <pre>{{ $user }}</pre>
            <br>
            User list: <pre>{{ $users }}</pre>
            {{--  @foreach($users as $user)
                {{ $user }} <br>
            @endforeach  --}}
        </p>
        <a href="greeting">Hello page</a>
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
            <button type="submit">Submit</button>
        </form>
    </body>
</html>