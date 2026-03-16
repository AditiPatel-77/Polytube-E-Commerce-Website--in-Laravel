@extends('client.layouts.master')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h5 class="text-primary">Our Categories</h5>
        <h2>Explore Product Categories</h2>
    </div>

    <div class="row justify-content-center">

        @foreach($categories as $category)

        <div class="col-lg-4 col-md-6 mb-4 d-flex">

            <div class="category-card">

                <div class="category-image">
                    <img src="{{ asset('uploads/categories/'.$category->image) }}"
                         alt="{{ $category->category_name }}">
                </div>

                <!-- <div class="category-content">

                    <h4 class="text-center">{{ $category->category_name }}</h4>

                    <div class="text-center mt-3">
                        <a href="{{ route('client.category.products',$category->id) }}"
                           class="btn btn-primary btn-sm">
                           View Products
                        </a>
                    </div> -->

                    <div class="category-content">

    <h4>{{ $category->category_name }}</h4>

    <a href="{{ route('client.category_products',$category->id) }}"
       class="btn btn-primary btn-sm mt-2">
       View Products
    </a>

</div>
                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection