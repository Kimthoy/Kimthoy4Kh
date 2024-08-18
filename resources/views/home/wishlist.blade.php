@extends('layoutfb.frontend') <!-- Assuming you're using a layout file -->

@section('content')
    <div class="container">
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
       
            <ul class="list-group">
            <div class="row">
               @if ($wishlists->isEmpty())
               <h1 class="text-center">Not found !</h1>
               <p class="text-center">Ops! Your Wishlist is Emty.</p><br>
               <p class="text-center">Now please into <a  href="{{route('home.shop')}}" style="font-size:20px;" > Shop</a> to add more product .</p>
               @else
               <h1 class="text-center">Your wishlist</h1>
                @foreach ($wishlists  as $wishlist)
                 
              <div class="col ">
               <div class="card box_shadow" style="width: 16rem;">
               <a href="#" ><img src="/img/{{$wishlist->product->image}}" class="card-img-top object-fit-fill" alt="...">  <span class="shadow p-3 bg-body-tertiary rounded text-black product_view ">View</span> </a>
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ $wishlist->product->name }}</h5>
                    <p class="card-text text-truncate text-center" style="font-size: small;">{{$wishlist->product->description}}</p>
                  </div>
              <div class="text-center">

                 Price : <span style="font-weight: bolder;font-size: larger;"> {{$wishlist->product->price}} $</span> </li>
              </div>
                 
                  <div class="card-body">
                
                       
                  <form action="{{ route('wishlist.moveToCart') }}" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $wishlist->product->id }}">
                            <button type="submit" class="btn btn-success btn_wishlist">Move to Cart</button>
                        </form>
                        
                  <form action="{{ route('wishlist.remove', $wishlist->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn_wishlist">Delete</button>
                        </form>

                      </div>
                    </div>
                      <br>
              
              </div>
             
                @endforeach
                @endif
               </div>
            </ul>
       
    </div>

@endsection
