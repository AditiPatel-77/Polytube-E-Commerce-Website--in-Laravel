@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header bg-primary">
        <h4>Add Material</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.materials.store') }}">
            @csrf

            <label>Material Type</label>
            <input type="text" name="name" class="form-control mb-3" required>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('admin.materials.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection
