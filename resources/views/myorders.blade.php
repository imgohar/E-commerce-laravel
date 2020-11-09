@extends('master')

@section('content')
    <div class="custom-product m-5">
        <div class="trending-wrapper">
            <div class="row">

               
                <div class="col-sm-10 ">
                    <h3>My Orders</h3>
                    <br><br><br>
                    @foreach ($products as $product)
                    <div class="row search-item cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{$product->id}}">
                                <img class="trending-image" src="{{$product->gallery}}" class="" alt="{{$product->name}}">
                                </a>
                        </div>
                        
                        <div class="col-sm-9">
                            <a href="detail/{{$product->id}}">
                                
                                <div class="">
                                <h2>{{$product->name}}</h2>
                                
                                </div> 
                            </a>
                            <h4>description: {{$product->description}}</h4>
                            <h4>Status: {{$product->status}}</h4>
                            <h4>Address: {{$product->address}}</h4>
                            <h4>Payment Status: {{$product->payment_status}}</h4>
                            <h4>Payment Method: {{$product->payment_method}}</h4>
                        </div>
                    </div>
                @endforeach
                </div>
                
            </div>

        </div>
    </div>
@endsection