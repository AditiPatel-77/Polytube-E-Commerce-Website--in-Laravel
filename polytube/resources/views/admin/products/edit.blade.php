@extends('admin.layouts.master')

@section('content')

<div class="card">
<div class="card-header bg-warning">
<h4>Edit Product</h4>
</div>

<div class="card-body">

<form action="{{ route('admin.products.update',$product->id) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf
@method('PUT')

{{-- PRODUCT NAME --}}
<input type="text"
       name="product_name"
       value="{{ $product->product_name }}"
       class="form-control mb-2"
       placeholder="Product Name">

{{-- CATEGORY --}}
<select name="category_id" class="form-control mb-2">
@foreach($categories as $cat)
<option value="{{ $cat->id }}"
{{ $product->category_id==$cat->id?'selected':'' }}>
{{ $cat->category_name }}
</option>
@endforeach
</select>

{{-- SIZE --}}
<select name="size_id" class="form-control mb-2">
@foreach($sizes as $s)
<option value="{{ $s->id }}"
{{ $product->size_id==$s->id?'selected':'' }}>
{{ $s->name }}
</option>
@endforeach
</select>

{{-- SHAPE --}}
<select name="shape_id" class="form-control mb-2">
@foreach($shapes as $s)
<option value="{{ $s->id }}"
{{ $product->shape_id==$s->id?'selected':'' }}>
{{ $s->name }}
</option>
@endforeach
</select>

{{-- MATERIAL --}}
<select name="material_id" class="form-control mb-2">
@foreach($materials as $m)
<option value="{{ $m->id }}"
{{ $product->material_id==$m->id?'selected':'' }}>
{{ $m->name }}
</option>
@endforeach
</select>

<input type="number"
       name="price"
       value="{{ $product->price }}"
       class="form-control mb-2"
       placeholder="Price">

<input type="number"
       name="stock"
       value="{{ $product->stock }}"
       class="form-control mb-2"
       placeholder="Stock">

{{-- IMAGE --}}
<input type="file" name="image" class="form-control mb-2">


@if($product->image)
<br>
<img src="{{ asset('uploads/products/'.$product->image) }}"
     width="120">
@endif


  <textarea name="description" class="form-control">{{ $product->description }}</textarea>
  


<br>

<button class="btn btn-success">Update Product</button>

</form>

</div>
</div>

@endsection
