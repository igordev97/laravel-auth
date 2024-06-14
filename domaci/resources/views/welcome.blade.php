@extends('layouts.layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1">Hello world this is my first web app</h1>
            </div>
            <div class="col-12 d-flex flex-wrap justify-evenly mt-5">
                @foreach($products as $product)
                    @component('.components.product',['product'=>$product])
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
@endsection
