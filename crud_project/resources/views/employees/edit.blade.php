@extends('employees.layout')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2>Edit Employee</h2>
        <a class="btn btn-secondary" href="{{ route('employees.index') }}">Back</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('employees.update',$employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $employee->name }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $employee->email }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Department</label>
        <input type="text" name="department" value="{{ $employee->department }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
