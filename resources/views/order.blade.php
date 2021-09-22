
@extends('master')

@section('content')

<div class="container">

  <h2 class="tranding-head">Order Now</h2>
  <br>
        <table class="table">
            <tbody>
                <tr>
                    <th>Amount</th>
                    <td>rs. {{$total}}</td>
                </tr>
                <tr>
                    <th>Tax</th>
                    <td>rs. {{$tax = 1000}}</td>
                </tr>
                <tr>
                    <th>Delivery</th>
                    <td>rs. {{$delivery = 200}}</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>rs. {{$total + $tax + $delivery}}</td>
                </tr>
            </tbody>
        </table>
<br>
<div class="row">
    <div class="col-8">
        <form action="add_to_order" method="post">
            @csrf
            <textarea name="address" class="form-control" placeholder="Enter Your Full Address here.."></textarea>
            <br>
            <input type="radio" name="paymenth_method" value="NB"> Net Banking <br>
            <input type="radio" name="paymenth_method" value="paypal"> Paypal <br>
            <input type="radio" name="paymenth_method" value="cod" checked> Cash on Delivery <br>
            <br>

            <button type="submit" class="btn btn-primary">Confirm Order</button>
            <br>
        </form>
    </div>
</div>

<br><br>
<div>
@endsection