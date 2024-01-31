@extends('master')
@section('content')
<div class="container-fluid p-5 title-page text-white text-center">
    <h1>Cart Detail</h1>
  </div>
<div class="container cart-detail-wrap">
    
    
        
        @if(count($products))
     
        @foreach ($products as $product)
        
            <div class="row cart_product_body">
                    <div class="col-md-3">
                        <a href="/detail/{{$product->id}}">
                            <img src="{{$product->gallery}}" width="200px">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>{{$product->name}}</h3>
                        <h5>{{$product->description}}</h5>
                    </div>
                    <div class="col-md-4">
                        <a href="/removecart/{{$product->cartId}}" class="btn btn-warning">Remove to Cart</a>
                    </div>
                    <div style="text-align: right">
                        <a href="ordernow" class="btn btn-success">Order Now</a>
                    </div>
            </div> 

        @endforeach 
        @else
        
            <h5 style="padding: 50px 0">There is no product in Cart</h5>
         
        @endif    
    </div>
</div>
       

@endsection