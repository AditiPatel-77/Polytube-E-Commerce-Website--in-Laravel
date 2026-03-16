<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('student.update', $student->id) }}" style="display:inline;">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name" value="{{ $student->name }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ $student->email }}"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="{{ $student->phone }}"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
