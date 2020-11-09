@extends('master')

@section('content')
    <div class="custom-product">
        <div class="trending-wrapper">
            <div class="row">

               
                <div class="col-sm-10 ">
                    <h3>Cart Products</h3>
                    <a class="btn btn-success" href="ordernow">Order Now</a>
                    <br><br><br>
                    @foreach ($products as $product)
                    <div class="row search-item cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{$product->id}}">
                                <img class="trending-image" src="{{$product->gallery}}" class="" alt="{{$product->name}}">
                                </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="detail/{{$product->id}}">
                                
                                    <div class="">
                                    <h2>{{$product->name}}</h2>
                                    
                                    </div> 
                                </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="detail/{{$product->id}}">
                                
                                    <div class="">
                                   
                                    <h4>{{$product->description}}</h4>
                                    </div> 
                                </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{$product->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                        </div>
                    </div>
                @endforeach
                <a class="btn btn-success" href="ordernow">Order Now</a>
                </div>
                
            </div>

        </div>
    </div>
@endsection