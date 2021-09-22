@extends('master')
@section('content')


  <h2 class="tranding-head">Products Details</h2>
  <br><br>
<div class="row product-card" style="align:center;">
        <div class="col-4 offset-1">
            <img src="{{$item['gallery']}}" class="card-img-top" style="max-height:500px;">
        </div>
        <div class="col-4 offset-1">
            <div class="card-body">
                <h5 class="card-title">{{$item['name']}}</h5>
                <p class="card-text">{{$item['description']}}</p>

                <h4 class="card-title">Rs.{{$item['price']}}</h4>
<br>
                <button class="btn btn-primary">Buy Now</button>
                <br><br>
                <form action="../add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$item['id']}}">
                    <button type="submit" class="btn btn-success">Add to cart</button>
                </form>

            </div>
        </div>
</div>
<br>
@endsection