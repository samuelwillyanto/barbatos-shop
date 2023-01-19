@extends('navbar')

@section('content')

<div class="card">
    <div class="card-header">
        @php
            if($products[0]->category_id == '1'){
                $category_name = 'Beauty';
            } elseif($products[0]->category_id == '2'){
                $category_name = 'Camera';
            } else {
                $category_name = 'Books';
            }
        @endphp
        {{$category_name}}
    </div>
    <div class="container">
    <div class="row mb-5">
        @foreach ($products as $product)
        <div class="col-sm-3 mt-3">
            <div class="card card-border">
                <a href="/detail/{{$product->id}}" style="text-decoration: none">
                <img src="{{ asset("storage/images/$product->photo") }}" class="card-img-top img-thumbnail thumb" alt="">
                <div class="card-body">
                    <p class="card-title text-truncate">{{ $product->name }}</p>
                    <p class="card-text"><strong>IDR {{ $product->price }}</strong></p>
                </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>

<div class="float-right" style="margin: 2rem">
    {{$products->links()}}
</div>

@endsection
