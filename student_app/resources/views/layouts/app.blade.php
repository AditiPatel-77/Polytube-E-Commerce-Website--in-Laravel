<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Laravel Template')</title>

        <style>
            body{
                font-family: Arial;
                margin: 20px;
            }

            header, footer{
                background: #eee;
                padding: 10px;
            }
            </style>
</head>

<header>
    <h2>My Laravel Website</h2>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/about') }}">About</a>
    <a href="{{ url('/contact') }}">Contact</a>
</header>


        <hr>

        {{--page Content--}}
        @yield('content')

        <hr>

<footer>
    <p>@ 2025 Laravel Template</p>
        </footer>

        </body>
</html>
