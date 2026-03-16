@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header bg-primary">
        <h4>Add Size</h4>
    </div>

<div class="card-body">
<form method="POST" action="{{ route('admin.sizes.store') }}">
@csrf

<label>Size</label>
            <input type="text" name="name" class="form-control mb-3" required placeholder="Enter Size">



<button class="btn btn-success">Save</button>
<a href="{{ route('admin.shapes.index') }}" class="btn btn-secondary">Back</a>

</form>


    </div>
</div>
@endsection
