
<!DOCTYPE html>
<html>
<head>
    <title>Master Page Layout</title>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    @section('footer')
        <p>This is footer</p>
    @show

</body>
</html>


<!-- <html>
    <head>
        <title>Master Page Layout</title>
</head>
<body>
    <div class="container">
        @yield('content')
</div>
@yield('footer')
</body>
</html> -->