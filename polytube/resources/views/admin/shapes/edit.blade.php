@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h4>Edit Shape</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.shapes.update',$shape->id) }}">
            @csrf
            @method('PUT')

            <label>Shape</label>
            <input type="text" name="name"
                   value="{{ $shape->name }}"
                   class="form-control mb-3" required>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('admin.shapes.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection
