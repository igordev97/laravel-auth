@extends('layouts.layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-9 mx-auto">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td><img src="{{asset('/images/'.$product->img)}}" alt="{{$product->img}}" width="20px"></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->amount}}</td>
                                <td>{{$product->price}}</td>
                                <td><a href="{{route('product.edit',['product'=>$product->id])}}" class="btn btn-info">Edit</a></td>
                                <td><a href="{{route('product.delete',['product'=>$product->id])}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
