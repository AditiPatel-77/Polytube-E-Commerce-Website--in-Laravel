@extends('admin.layouts.master')

@section('content')

<a href="{{ route('admin.sizes.create') }}" class="btn btn-primary mb-2">
Add Size
</a>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Size</th>
<th>Action</th>
</tr>

@foreach($sizes as $s)
<tr>
<td>{{ $s->id }}</td>
<td>{{ $s->name }}</td>
<td>
<a href="{{ route('admin.sizes.edit',$s->id) }}" class="btn btn-sm btn-warning">Edit</a>

<form action="{{ route('admin.sizes.destroy',$s->id) }}"
method="POST" style="display:inline">
@csrf
@method('DELETE')
<button class="btn btn-sm btn-danger">Delete</button>
</form>

</td>
</tr>
@endforeach

</table>

@endsection
