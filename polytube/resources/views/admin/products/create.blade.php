@extends('admin.layouts.master')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<div class="card">
    <div class="card-header bg-primary">
        <h4>Add Product</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-6">
                    <label>Product Name</label>
                    <input type="text" name="product_name" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label>Category</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">Select</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4 mt-3">
                    <label>Size</label>
                    <select name="size_id" class="form-control" required >
                        @foreach($sizes as $size)
                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4 mt-3">
                    <label>Shape</label>
                    <select name="shape_id" class="form-control" required>
                        @foreach($shapes as $shape)
                            <option value="{{ $shape->id }}">{{ $shape->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4 mt-3">
                    <label>Material</label>
                    <select name="material_id" class="form-control" required>
                        @foreach($materials as $material)
                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mt-3">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control">
                </div>

                <div class="col-md-6 mt-3">
                    <label>Stock</label>
                    <input type="number" name="stock" class="form-control">
                </div>

                <div class="col-md-6 mt-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="4"></textarea>
</div>

            </div>

            <div class="mt-4">
                <button class="btn btn-success">Save Product</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
            </div>

        </form>
    </div>
</div>

@endsection
