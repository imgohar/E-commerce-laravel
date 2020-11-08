@extends('master')

@section('content')
    <div class="custom-product">
        <div class="trending-wrapper">
            <div class="row">

                <div class="col-sm-4">
                    <a href="#">Filter</a>
                </div>
                <div class="col-sm-4">
                    <h3>Searched Products</h3>
                    @foreach ($products as $product)
                    <div class="search-item">
                        <a href="detail/{{$product->id}}">
                        <img class="trending-image" src="{{$product->gallery}}" class="" alt="{{$product->name}}">
                            <div class="">
                            <h2>{{$product->name}}</h2>
                            <h4>{{$product->description}}</h4>
                            </div> 
                        </a>
                    </div>
                @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection