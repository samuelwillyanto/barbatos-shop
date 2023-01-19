@extends('navbar')

@section('content')
@if (count($carts) < 1)
    <h4>There's No Products in Cart</h4>
@else

<div class="d-flex justify-content-center row">
    <div class="col-md-10">
        @php
            $total = 0;
        @endphp
        @foreach ($carts as $cart)
        @php
            $product = $cart->products;
            $total_price = $cart->quantity * $product->price;
            $total += $total_price;
        @endphp
        <div class="row p-2 bg-white border rounded mt-2">
            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ asset("storage/images/$product->photo") }}"></div>
            <div class="col-md-6 mt-1">
                <h5 class="text-truncate">{{$product->name}}</h5>
                <div class="mt-1 mb-1 spec-1"><span>Quantity : {{$cart->quantity}}</span></div>
                <div class="mt-1 mb-4 spec-1"><span>Price : {{$product->price}}</span></div>
                <div class="mt-1 mb-4 spec-1"><span>Total Price : {{$total_price}}</span></div>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                <div class="d-flex flex-column d-grid gap-2 mt-2" data-toggle="buttons">
                    <form action={{route('delete_cart')}} method="POST" class="d-flex flex-column mt-2">
                        @csrf
                        @method("DELETE")
                        <input type="hidden" name="cart_id" value="{{$cart->id}}">
                        <button class="btn btn-outline-danger" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"> Delete</i></button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<center>
    <form action={{route('purchase')}} method="POST" class="d-flex flex-column mt-2">
        @csrf
        <p class="mt-5">
            <strong>Total Price : IDR {{$total}}</strong>
            <button class="ml-5 btn btn-outline-success" type="submit"><i class="fa fa-shopping-cart"> Purchase</i></button>
        </p>
    </form>




</center>

@endif
@endsection
