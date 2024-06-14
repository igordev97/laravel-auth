<div class="product-box d-flex justify-center flex-column">
    <img src="{{asset('/images/'.$product->img)}}" alt="{{$product->img}}" class="product-img">
    <h2 class="product-title">{{$product->name}}</h2>
    <h3 class="product-price"><strong>{{$product->price}} $</strong></h3>
    <a href="{{route('product.single',['product'=>$product->id])}}" class="link">View product</a>
</div>
