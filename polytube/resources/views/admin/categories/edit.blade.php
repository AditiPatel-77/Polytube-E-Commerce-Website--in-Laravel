@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <h2>Edit Category</h2>
        <a href="{{ route('admin.categories.index') }}" 
           class="btn btn-secondary float-right">Back</a>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.categories.update', $category->id) }}" 
                  method="POST" 
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" 
                           name="category_name" 
                           class="form-control"
                           value="{{ $category->category_name }}" 
                           required>
                </div>

  <div class="form-group">
    <label>Current Image</label><br>

    @if($category->category_image)
        <img src="{{ asset('uploads/categories/'.$category->category_image) }}"
             width="100">
    @else
        <p>No Image</p>
    @endif

</div>

                <div class="form-group">
                    <label>Change Image</label>
                    <input type="file" 
                           name="category_image" 
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    Update Category
                </button>

            </form>

        </div>
    </div>
</div>

@endsection