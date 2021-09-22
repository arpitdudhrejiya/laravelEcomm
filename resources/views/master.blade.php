<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce project</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
        {{View::make('header')}}

        @yield('content')
        
        {{View::make('footer')}}

         <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
    
    .search-bar{
        margin-left:200px;
    }
    .slider-img{
        height:300px !important;
        margin:50px 20%;
    }
    .slider-txt{
        background-color:#00000024;
    }
    .carousel {
        margin-top:-20px;
        border-top:1px solid #8080801c;
        border-bottom:1px solid #8080801c;
    }
    .product-card{
        margin:30px;

    }
    .tranding-head{
        margin:50px 0px 30px 0px;
        text-decoration:blink;
        text-align:center;
    }
   .card{
       align:center;
       margin:10px 20px;
       border:none !important;
   }
   .card-img{
       max-height:200px;

   }
</style>
</body>
</html>