@extends('layouts.master')

@section('title', 'Add Student')

@section('content')

<h2>Student Registration</h2>

<form method="POST" action="{{ route('students.store') }}">
@csrf

Name:
<input type="text" name="name"><br><br>

Email:
<input type="email" name="email"><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female<br><br>

Skills:
<input type="checkbox" name="skills[]" value="HTML"> HTML
<input type="checkbox" name="skills[]" value="CSS"> CSS
<input type="checkbox" name="skills[]" value="Laravel"> Laravel<br><br>

Phone:
<input type="text" name="phone"><br><br>

<button type="submit">Register</button>

</form>

@endsection