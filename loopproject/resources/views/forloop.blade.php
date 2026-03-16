<!-- <html>
    <body>
        <font size='5' face='Arial'>
            
            @if(($id)==1)
            Student id is equal to 1
            @else
            student id not equal to 1
            @endif
</font>
</body>
</html> -->

<!-- <html>
    <body>
        <font size='8' face='Arial'>
            @unless($id==1)
            Student id is not equal to 1.
            @endunless
</font>
</body>
</html> -->

<!-- <html>
    <body>
        <title>
            @hasSection('title')
            @yield('title') - App Name
            @else
            Name
            @endif
</title>
</body>
</html> -->

<!-- value of i:
@for($i=1;$i<11;$i++)
{{$i}}
@endfor -->

<!DOCTYPE html>
<html>
<head>
    <title>For Loop Example</title>
</head>
<body>

    <font size="5" face="Arial">
        <b>Value of i:</b><br><br>

        @for($i = 1; $i <= 10; $i++)
            {{ $i }} <br>
        @endfor
    </font>

</body>
</html>
