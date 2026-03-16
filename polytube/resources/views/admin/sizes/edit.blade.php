@extends('admin.layouts.master')

@section('content')

<div class="card">
    <div class="card-header bg-warning">
        <h4>Edit size</h4>
    </div>

    <div class="card-body">
<form method="POST" action="{{ route('admin.sizes.update',$size->id) }}">
@csrf
@method('PUT')

<label>Size</label>
<input type="text" name="name"
value="{{ $size->name }}"
class="form-control mb-2">

<button class="btn btn-success">Update</button>
<a href="{{ route('admin.materials.index') }}" class="btn btn-secondary">Back</a>

</form>
    </div>
</div>
@endsection

