@extends('master')
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    @foreach($products as $product)
      <div class="item {{$product->id==1?'active':''}}">
        <a href="detail/{{$product->id}}">
        <img class="slider-img" src="{{$product->gallery}}">
        <div class="carousel-caption slider-txt">
          <h3>{{$product->name}}</h3>
          <p>{{$product->description}}</p>
        </div>
        </a>
      </div>

   @endforeach
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <h2 class="tranding-head">Tranding Products</h2>
<div class="row product-card">
    @foreach($products as $item)
        <div class="col-2 card">
            <img src="{{$item->gallery}}" class="card-img-top card-img">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <h4 class="card-title">Rs.{{$item->price}}</h4>

                <a href="detail/{{$item->id}}" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
    @endforeach
</div>
<br>
<hr>
<Br><br>
@endsection