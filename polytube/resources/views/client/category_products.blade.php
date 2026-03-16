@extends('client.layouts.master')

@section('content')

<section class="products-section py-5">
<div class="container">

    <!-- Page Title -->
    <div class="text-center mx-auto mb-5" style="max-width:600px;">
        <h5 class="text-primary">Our Products</h5>
        <h2 class="fw-bold">{{ $category->category_name }} Products</h2>
    </div>

    <div class="row g-4">

        @forelse($products as $product)

        <div class="col-lg-4 col-md-6 col-sm-12">

            <div class="product-card">

                <!-- Product Image -->
                <div class="product-image-box">
                    <img src="{{ asset('uploads/products/'.$product->image) }}"
                         alt="{{ $product->product_name }}">
                </div>

                <!-- Product Info -->
                <div class="product-info text-center">

                    <h5>{{ $product->product_name }}</h5>

                    <p class="price">₹ {{ $product->price ?? '' }}</p>

                    <a href="{{ route('client.product_detail', $product->id) }}"
                       class="btn btn-primary btn-sm">
                        View Detail
                    </a>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12 text-center">
            <p>No products found in this category.</p>
        </div>

        @endforelse

    </div>

</div>
</section>

@endsection