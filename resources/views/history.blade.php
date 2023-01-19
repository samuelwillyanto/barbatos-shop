@extends('navbar')

@section('content')

@foreach ($transactions as $transaction)
@php
    $total_quantity = 0;
    $total_price = 0;
@endphp
<div class="container mt-2 px-5">
    <div class="bg-secondary text-light">
        Transaction Date on {{$transaction->transaction_date}}
    </div>
    <div>
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </thead>
            <tbody>
                @foreach ($transaction->transaction_details as $detail)
                    @php
                        $product = $detail->products;
                        $total_quantity += $detail->quantity;
                        $price_per_product = $detail->quantity * $product->price;
                        $total_price += $detail->quantity * $product->price;
                    @endphp
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$detail->quantity}}</td>
                        <td>IDR {{$price_per_product}}</td>
                    </tr>
                @endforeach
                <tr class="font-weight-bold">
                    <td>Total</td>
                    <td>{{$total_quantity}} item(s)</td>
                    <td>IDR {{$total_price}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endforeach

@endsection
