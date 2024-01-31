@extends('master')
@section('content')
<div class="container-fluid p-5 title-page text-white text-center">
    <h1>Product Detail</h1>
  </div>
<div class="container detail-wrap">
    <div class="row">
        <div class="col-md-6">
            <img src="{{$product['gallery']}}" class="detail-image">
        </div>
        <div class="col-md-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h5><b>Price:</b> {{$product['price']}}</h5>
            <h5><b>Detail:</b> {{$product['description']}}</h5>
            <h5><b>Category:</b> {{$product['category']}}</h5>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            
            <br>
            <button class="btn btn-success">But Now</button>
            
        </div>
    </div>
</div>
       

@endsection