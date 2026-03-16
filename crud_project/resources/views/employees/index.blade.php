@extends('employees.layout')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2>Employee List</h2>
        <a class="btn btn-success" href="{{ route('employees.create') }}">Add Employee</a>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">{{ $message }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Department</th>
        <th width="250px">Action</th>
    </tr>
    @foreach ($employees as $employee)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->phone }}</td>
        <td>{{ $employee->department }}</td>
        <td>
            <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
