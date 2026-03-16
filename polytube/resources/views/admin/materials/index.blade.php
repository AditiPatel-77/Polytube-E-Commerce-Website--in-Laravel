@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Materials</h3>
        <a href="{{ route('admin.materials.create') }}" class="btn btn-primary float-right">Add Material</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Material Type</th>
                <th width="150">Action</th>
            </tr>

            @foreach($materials as $material)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $material->name }}</td>
                <td>
                    <a href="{{ route('admin.materials.edit',$material->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('admin.materials.destroy',$material->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Delete material?')">
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
