@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h4>Edit Material</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.materials.update',$material->id) }}">
            @csrf
            @method('PUT')

            <label>Material Type</label>
            <input type="text" name="name"
                   value="{{ $material->name }}"
                   class="form-control mb-3" required>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('admin.materials.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection
