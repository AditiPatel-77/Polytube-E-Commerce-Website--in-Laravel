@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <h2>Add Category</h2>
        <a href="{{ route('admin.categories.index') }}" 
           class="btn btn-secondary float-right">Back</a>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.categories.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" 
                           name="category_name" 
                           class="form-control" 
                           required>
                </div>

                <div class="form-group">
                    <label>Category Image</label>
                    <input type="file" 
                           name="category_image" 
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Save Category
                </button>

            </form>

        </div>
    </div>
</div>

@endsection