@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header bg-primary">
        <h4>Add Shape</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.shapes.store') }}">
            @csrf

            <label>Shape</label>
            <input type="text" name="name" class="form-control mb-3" required>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('admin.shapes.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection
