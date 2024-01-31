@extends('master')
@section('content')
<div class="container-fluid p-5 title-page text-white text-center">
    <h1>My Orders Details</h1>
  </div>
<div class="container cart-detail-wrap">
    
        
        @if(count($orders))

        @foreach ($orders as $order)
        
            <div class="row cart_product_body">
                    <div class="col-md-3">
                        <a href="/detail/{{$order->id}}">
                            <img src="{{$order->gallery}}" width="200px">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>Name : {{$order->name}}</h3>
                        <h5>Delivery Status : {{$order->status}}</h5>
                        <h5>Address : {{$order->address}}</h5>
                        <h5>Payment Method : {{$order->payment_method}}</h5>
                        <h5>Payment Status : {{$order->payment_status}}</h5>
                        
                    </div>
            </div> 
        @endforeach 
        @else
        
            <h5 style="padding: 50px 0">There is no Order yet.</h5>
         
        @endif    
    </div>
</div>
       

@endsection