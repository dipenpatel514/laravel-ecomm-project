@extends('master')
@section('content')

<div class="custom-slider">
   
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($products as $item)
            <a href="detail/{{$item['id']}}">
                <div class="carousel-item {{$item['id']==1?'active':''}} ">
                    <img src="{{$item['gallery']}}" class="d-block slider-image ">
                    <div class="carousel-caption d-none d-md-block slider-text">
                    <h4>{{$item['name']}}</h4>
                    <p>{{$item['description']}}</p>
                    </div>
                </div>
            </a>   
            @endforeach
        </div>
        <button class="carousel-control-prev slider-arrow" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next slider-arrow" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

<div class="trending-wrapper">
    <h3 style="margin-bottom:50px">Trending Products</h3>
    @foreach ($products as $item)
        <a href="detail/{{$item['id']}}">
        <div class="trending-item {{$item['id']==1?'active':''}} ">
            <img src="{{$item['gallery']}}" class="trending-image">
            <div>
                <h4>{{$item['name']}}</h4>
            </div>
        </div>
        </a>
    @endforeach
</div>
       

@endsection