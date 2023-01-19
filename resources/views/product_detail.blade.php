@extends('navbar')

@section('content')


<div class="container">
    <div class="card card-detail">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="{{ asset("storage/images/$product_detail->photo") }}" /></div>
                    </div>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{ $product_detail->name }}</h3>

                    <p class="product-description">{{ $product_detail->detail}}</p>
                    <h4 class="price">Price: <span>IDR {{ $product_detail->price }}</span></h4>
                    @if ( Auth::user() && Auth::user()->role == 'registered' )
                    <form action="{{route('add_to_cart')}}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="product_id" value="{{$product_detail->id}}">
                        <div class="mb-3">
                            <label for="qty">Qty</label>
                            <input type="text" class="form-control" id="qty" name="quantity" required>
                        </div>
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="submit">Purchase</button>
                        </div>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
