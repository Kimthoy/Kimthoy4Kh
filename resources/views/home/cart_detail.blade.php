@extends('layoutfb.frontend')
@section('content')

@if(session('success'))
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Primary!</strong> {{ session('success') }}
            </div>
        @endif

<div class="row cart_padding">
    <div class="col-6"><img src="/img/{{$product->image}}" width="600px" alt=""></div>
    <div class="col-6 back_color">
    <h1 class=" text-center ">Product Information</h1>
      <div>
         
         <div class="padding_list ">
             <div class="margin_top">  <h1>{{$product->name}}</h1></div>
              <div class="margin_top"> {{$product->description}}</div>
              <div class="margin_top">Price: $ {{$product->price}}</div >
              
               
               
         </div>
         <div class="text-center">
         
            <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-outline-info text-black p-2 btn_wishlist">Add to cart</a>
         
            <a href="{{route('home.shop')}}" class="btn btn-outline-warning bold-1 text-black p-2 btn_wishlist">Continue to shop</a>
            <br>
            <br>
           
         </div>

      </div>
    </div>
  </div>

@endsection