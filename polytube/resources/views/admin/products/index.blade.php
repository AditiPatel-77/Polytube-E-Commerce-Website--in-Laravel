@extends('admin.layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Products</h3>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary float-right">
            Add Product
        </a>
    </div>

    <div class="card-body">

        {{-- Search --}}
        <form method="GET" class="mb-3">
            <input type="text" name="search"
                   value="{{ request('search') }}"
                   placeholder="Search product">
            <button class="btn btn-sm btn-info">Search</button>
        </form>

        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Size</th>
                <th>Shape</th>
                <th>Material</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Action</th>
            </tr>

            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->category->category_name ?? '' }}</td>
                <td>{{ $product->size->name ?? '' }}</td>
                <td>{{ $product->shape->name ?? '' }}</td>
                <td>{{ $product->material->name ?? '' }}</td>
                <td>{{ $product->price }}</td>

                <td>
                    @if($product->image)
                        <img src="{{ asset('uploads/products/'.$product->image) }}"
                             width="60">
                    @endif
                </td>
                <td>{{ Str::limit($product->description, 50) }}</td>

                <td>
                    <a href="{{ route('admin.products.edit',$product->id) }}"
                       class="btn btn-sm btn-warning">
                       Edit
                    </a>

                    <form action="{{ route('admin.products.destroy',$product->id) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this product?')">
                                Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {{ $products->links() }}

    </div>
</div>
@endsection
