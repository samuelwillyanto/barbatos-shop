@extends('navbar')

@section('content')

<div class="container">
    @if ($errors->any())
        <strong>{{$errors->first()}}</strong>
    @endif

    <form class="d-flex" action={{route('search_product')}}>
        <input class="form-control me-2" type="search" name="name" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
    </form>

    @if (count($categories) < 1)
        <h4>NO PRODUCTS FOUND</h4>
    @else
        @foreach ($categories as $category)
        <div class="container mb-3">
        <div class="card">
            <div class="card-header">
                {{$category->name}}
                <a href="/category/{{$category->id}}" style="color: blue">View all</a>
            </div>
            <div class="container">
            <div class="row mb-4">
                @foreach ($category->products as $product)
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
        </div>
        @endforeach

    @endif
</div>

@endsection
