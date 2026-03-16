@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Shapes</h3>
        <a href="{{ route('admin.shapes.create') }}" class="btn btn-primary float-right">Add Shape</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Shape</th>
                <th width="150">Action</th>
            </tr>

            @foreach($shapes as $shape)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $shape->name }}</td>
                <td>
                    <a href="{{ route('admin.shapes.edit',$shape->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('admin.shapes.destroy',$shape->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete shape?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
