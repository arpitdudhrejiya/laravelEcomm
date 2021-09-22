@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h2 style="padding-bottom:10px; text-decoration:underline;">Registration Form</h2>
            <form action="register" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
             
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <br><br>
            <small class="form-text text-muted">Already Registred? Click to login</small>

        </div>
    </div>
</div>
@endsection