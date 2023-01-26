@extends('layout')
@section('content')
<div class="row">
    <div class="col-3">
        <a href="/" type="button" class="btn btn-light">
            ← Back to Shop
        </a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-8">
        <div class="card px-5 py-4">
            <h1 class="fw-bold mb-4">🛒 Cart</h1>

            <strong>{{ count($carts) }} Products</strong>
            <hr>
            @foreach($carts as $cart)
            <span class="fw-bold">₱ {{ $cart->product->price * $cart->quantity }} – <span class="badge rounded-pill text-bg-dark">{{ $cart->quantity }} pcs</span>&nbsp; {{ $cart->product->name }}</span>
            <hr>
            @endforeach
            <a href="{{ route('emptycart') }}" class="btn btn-light">Empty Cart</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card px-5 py-3">
            <h5 class="fw-bold">Checkout</h5>
            <p class="fw-bold mt-2">Total Price</p>
            <h2>₱ {{ $total }} </h2>
            <select class="form-select mt-3">
                <option selected>Payment Method</option>
                <option value="1">Credit / Debit</option>
                <option value="2">PayPal</option>
                <option value="3">Cash on Delivery</option>
                <option value="2">E-Wallets</option>
            </select>
            <div class="btn btn-dark mt-4">⛟ Order Now</div>
        </div>
    </div>
</div>

@endsection