@foreach($products as $product)

<div class="col-md-4 mb-4">
    <div class="card h-100 text-center">

        <!-- Product Image -->
        <img src="{{ asset('uploads/products' . $product->product_image) }}" 
             class="card-img-top" 
             alt="{{ $product->name }}">

        <div class="card-body">
            <h5 class="card-title">
                {{ $product->name }}
            </h5>

            <!-- Detail Button -->
            <a href="{{ route('client.product_detail', $product->id) }}" 
               class="btn btn-primary mt-2">
                {{ $product->name }} Detail
            </a>

        </div>

    </div>
</div>

@endforeach