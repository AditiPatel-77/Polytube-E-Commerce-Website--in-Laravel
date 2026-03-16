@extends('layouts.master')

@section('title', 'Edit Student')

@section('content')

@php $skills = explode(',', $student->skills); @endphp

<h2>Edit Student</h2>

@if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('students.update',$student->id) }}">
@csrf
@method('PUT')

Name:
<input type="text" name="name" value="{{ $student->name }}"><br><br>

Email:
<input type="email" name="email" value="{{ $student->email }}"><br><br>

Gender:
<input type="radio" name="gender" value="Male" {{ $student->gender=='Male'?'checked':'' }}> Male
<input type="radio" name="gender" value="Female" {{ $student->gender=='Female'?'checked':'' }}> Female<br><br>

Skills:
<input type="checkbox" name="skills[]" value="HTML" {{ in_array('HTML',$skills)?'checked':'' }}> HTML
<input type="checkbox" name="skills[]" value="CSS" {{ in_array('CSS',$skills)?'checked':'' }}> CSS
<input type="checkbox" name="skills[]" value="Laravel" {{ in_array('Laravel',$skills)?'checked':'' }}> Laravel<br><br>

Phone:
<input type="text" name="phone" value="{{ $student->phone }}"><br><br>

<button type="submit">Update</button>

</form>

@endsection
