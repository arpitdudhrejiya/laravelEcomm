
  @extends('master')
@section('content')


  <h2 class="tranding-head">Order History</h2>
  <br><hr>
  <style>
      p{
          line-height:.5;
      }
  </style>
  
<div class="row product-card" style="align:center;">
@foreach($orders as $order)
     
<div class="col-2 offset-1">
            <img src="{{$order->gallery}}" class="card-img-top" style="max-height:200px; max-width:150px;">
        </div>
        <div class="col-3">
            <div class="card-body">
                <h6 class="card-title">{{$order->name}}</h6>
                <p>OrderId: #2021 {{$order->id}} {{$order->orderId}}</p>
                <p>Address: {{$order->address}}</p>
                <p>Payment Status: {{$order->payment_status}}</p>
                <p>Payment Method: {{$order->payment_method}}</p>
                <p>Delivery: {{$order->status}}</p>
                <h6 class="card-title">Rs.{{$order->price}}</h6>
            </div>
            <hr>

        </div>      

        @endforeach
  
</div>
<br>

@endsection