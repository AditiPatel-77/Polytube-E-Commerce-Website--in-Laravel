@extends('client.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row align-items-center">

        <!-- Product Image -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('uploads/products/'.$product->image) }}" 
                 class="img-fluid rounded shadow"
                 style="max-height:400px;">
        </div>

        <!-- Product Details -->
        <div class="col-md-6">

            <h2 class="mb-3">{{ $product->product_name }}</h2>

            <h4 class="text-success mb-3">
                ₹ {{ $product->price }}
            </h4>

            <p><strong>Category:</strong> {{ $product->category->category_name ?? '' }}</p>
            <p><strong>Size:</strong> {{ $product->size->name ?? '' }}</p>
            <p><strong>Shape:</strong> {{ $product->shape->name ?? '' }}</p>
            <p><strong>Material:</strong> {{ $product->material->name ?? '' }}</p>

            <hr>

            <h5>Description</h5>
            <p>
                {{ $product->description }}
            </p>

            <a href="{{ url()->previous() }}" 
               class="btn btn-dark mt-3">
               Back
            </a>

        </div>

    </div>
</div>

@endsection