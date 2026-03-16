@extends('layouts.master')

@section('title', 'Student List')

@section('content')

<h2>Student List</h2>

@if(session('success'))
    <p class="success">{{ session('success') }}</p>
@endif

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Skills</th>
    <th>Phone</th>
    <th>Action</th>
</tr>

@foreach($students as $student)
<tr>
    <td>{{ $student->id }}</td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->email }}</td>
    <td>{{ $student->gender }}</td>
    <td>{{ $student->skills }}</td>
    <td>{{ $student->phone }}</td>
    <td>
        <a href="{{ route('students.edit',$student->id) }}">Edit</a>

        <form method="POST" action="{{ route('students.destroy',$student->id) }}" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>

@endsection
