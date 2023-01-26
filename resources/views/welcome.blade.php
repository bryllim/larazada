@extends('layout')
@section('content')
<div class="row">
    <div class="col-3">
        <a href="/cart" type="button" class="btn btn-light position-relative">
            🛒 Cart
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $cart }}
            </span>
        </a>
    </div>
</div>

<hr>
<!-- Categories -->
<div class="row">
    <div class="col-12 text-center pb-5">
        <h3 class="fw-bold">All Products</h3>
        <div class="btn-group" role="group" >
            @foreach($categories as $category)
            <a href="{{ route('category', $category->id) }}" type="button" class="btn btn-light">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</div>

<div class="row">
    <!-- Products -->
    @foreach($products as $product)
    <div class="col-md-3 mb-3 d-flex">
        <div class="card p-3">
            <span class="fw-bold">{{ $product->name }}</span>
            <img src="https://picsum.photos/300" class="img-fluid img-thumbnail my-2">
            <p><span class="badge rounded-pill text-bg-light">{{ $product->category->name }}</span></p>
            <p>{{ $product->description }}</p>
            <p class="fw-bold">₱{{ $product->price }}</p>
            <a href="{{ route('addtocart', $product->id) }}" class="btn btn-primary">Add to Cart</a>
        </div>
    </div>
    @endforeach

</div>
@endsection