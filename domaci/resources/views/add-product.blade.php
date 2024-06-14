@extends('layouts.layout')


@section('main')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2 class="display-3"><strong>Add new product</strong></h2>
                <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label class="form-label" for="name">Enter product name:</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>

                    <div class="form-group my-3">
                        <label for="description" class="form-label">Enter product description</label>
                        <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category" class="form-label">Choose product category</label>
                        <select name="category" id="category" class="form-select">
                            <option value="cpu">CPU</option>
                            <option value="motherboard">MOTHERBOARD</option>
                            <option value="gpu">GPU</option>
                            <option value="ram">RAM</option>
                            <option value="ssd">SSD</option>
                            <option value="power-suplay">POWER SUPLAY</option>
                            <option value="pc-mouse">PC MOUSE</option>
                            <option value="keyboard">KEYBOARD</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="amount">Enter product amount:</label>
                        <input type="number" name="amount" id="amount" class="form-control">
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="price">Enter product price:</label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="price">Enter product image:</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>

                    <button class="btn btn-lg btn-primary mt-4">Save product</button>

                </form>

                @if(session()->has('success'))
                    <p class="text-success">{{session('success')}}</p>
                @endif
                @if($errors->any())
                    <p class="text-danger">{{$errors->first()}}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
