<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E Commerce Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <style>
        .custom-login{
            height: 500px;
            padding-top: 100px;
        }
        img.slider-img{
            height: 400px !important;
        }
        .custom-product{
            height: 600px;

        }
        .slider-text{
            background-color: #35443585 !important;
        }
        .trending-image{
            height: 100px;

        }
        .trending-item{
            float:left; 
            width: 20% !important;
        }
        .trending-wrapper{
            margin: 30px;
        }
        .detail-img{
            height: 200px;
        }
        .search-box{
            width: 500px !important;
        }
        .cart-list-divider{
            border-bottom: solid 1px #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px; 
        }
    </style>
    
    {{View::make('layouts.header')}}

    <div class="container">
        @yield('content')
    </div> 

    {{View::make('layouts.footer')}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>