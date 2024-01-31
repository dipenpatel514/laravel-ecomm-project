@extends('master')
@section('content')


<div class="container-fluid p-5 title-page text-white text-center">
    <h1>Search Products</h1>
  </div>

<div class="container">
    <div class="row">

    @foreach ($products as $item)
    <div class="row cart_product_body">
        <div class="col-md-3">
            <a href="/detail/{{$item->id}}">
                <img src="{{$item->gallery}}" width="200px">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{$item->name}}</h3>
            <h5>{{$item->description}}</h5>
        </div>
        <div class="col-md-4">
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$item['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
        </div>
</div> 
        @endforeach
</div>
</div>
</div
       

@endsection