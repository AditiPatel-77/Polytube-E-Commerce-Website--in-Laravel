@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <h2>Categories</h2>
        <a href="{{ route('admin.categories.create') }}" 
           class="btn btn-primary float-right">Add Category</a>
    </div>

    <div class="card">
        <div class="card-body">

            <form method="GET" action="{{ route('admin.categories.index') }}">
                <input type="text" name="search" placeholder="Search category">
                <button class="btn btn-info">Search</button>
            </form>

            <br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            @if($category->category_image)
                                <img src="{{ asset('uploads/categories/'.$category->category_image) }}"
                                     width="60">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.categories.edit',$category->id) }}"
                               class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('admin.categories.destroy',$category->id) }}"
                                  method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection