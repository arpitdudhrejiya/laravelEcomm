
  @extends('master')
@section('content')


  <h2 class="tranding-head">Cart Products</h2>
  <br><hr>
  @foreach($products as $product)
<div class="row product-card" style="align:center;">
        <div class="col-2 offset-1">
            <img src="{{$product->gallery}}" class="card-img-top" style="max-height:100px; max-width:100px;">
        </div>
        <div class="col-3">
            <div class="card-body">
                <h6 class="card-title">{{$product->name}}</h6>
                <!-- <p>OrderId: #2021 {{$product->id}} {{$product->cartid}}</p> -->
                <h5 class="card-title">Rs.{{$product->price}}</h5>
            </div>
        </div>
        <div class="col-1">
            <div class="card-body">
                <a href="removecart/{{$product->cartid}}" class="btn btn-danger">Remove</a>
            </div>
        </div>
        
</div>

<hr>
@endforeach
<br>
<div class="row product-card" style="align:center;">
        <div class="col-2 offset-1">
            <h3>Total</h3>
        </div>
        <div class="col-3">
                <h4 class="card-title">Rs.{{$total}}</h4>
        </div>   
        <div class="col-1">
               
                <a href="ordernow" class="btn btn-success">Order Now</a>
        </div>     
</div>

<br>

@endsection