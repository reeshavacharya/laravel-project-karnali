@extends('master')
@section("content")

<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
       <h2>{{$product['name']}}</h2>
       <h3><b>Price</b> : <p style="color:green">${{$product['price']}}</p></h3>
       <h3><b>Details</b>: {{$product['description']}}</h3>
       <h3><b>category</b>: {{$product['category']}}</h3>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <!-- <a class="btn btn-success" href="">Buy Now</a> <br> <br> -->
       <!-- <button class="btn btn-success">Buy Now</button> -->
       <button onclick="window.location.href='/ordernow'" class="btn btn-success">Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection