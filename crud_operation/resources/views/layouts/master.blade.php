<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Student Registration')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 70%;
            margin: auto;
            background: white;
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 0 10px #ccc;
        }
        h2 {
            text-align: center;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        table th {
            background: #eee;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
        .nav {
            margin-bottom: 20px;
            text-align: center;
        }
        .nav a {
            margin: 0 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="nav">
        <a href="{{ route('students.index') }}">Student List</a>
        <a href="{{ route('students.create') }}">Add Student</a>
    </div>

    @yield('content')

</div>

</body>
</html>
