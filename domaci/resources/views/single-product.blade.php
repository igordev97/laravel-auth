@extends('layouts.layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-between">
                <div class="col-4 p-3">
                    <img src="{{asset('images/'.$product->img)}}" alt="{{$product->img}}" width="300px" >
                </div>
                <div class="col-6 p-3">
                    <h1>{{$product->name}}</h1>
                    <p class="my-3">{{$product->description}}</p>
                    <h3>{{$product->price}} $</h3>

                    <button class="btn btn-warning">Buy Now</button>
                    <button class="btn btn-success">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
@endsection
