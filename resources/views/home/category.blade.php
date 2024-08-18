@extends('layoutfb.frontend')
@section('content')

    <div class="row">
        <br>
          @if (count(array($categories)) > 0)
            <div class="col-md-12">
                <ul class="list-unstyled mb-0">
                    @foreach ($categories as $category)
                    <li><a href="{{url('/frontend'.$category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (count(array($categories)) > 0)
            <div class="col-md-12">
                <ul class="list-unstyled mb-0">
                    @foreach ($categories as $category)
                    <li><a href="{{url('/frontend'.$category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br><br><br>
        <div class="row">
           @foreach ($products as $product)
           
         
             
              <div class="col ">
               <div class="card box_shadow" style="width: 16rem;">
               <a href="{{ route('cart_detail', $product->id) }}" ><img src="/img/{{$product->image}}" class="card-img-top" alt="...">   </a>
                  <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text" style="font-size: small;">{{$product->description}}</p>
                  </div>
              <div>

                 Price : <span style="font-weight: bolder;font-size: larger;"> {{$product->price}} $</span> </li>
              </div>
                 
                  <div class="card-body">
                  
                  <a href="{{ route('wishlist', $product->id) }}" class="btn btn-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="pink" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                  </svg></a>
                  
                  

                  
            <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-success btn-sm text-white p-2">Add to cart</a>

               
                  </div>
                </div>
                <br>
              </div>
             

              @endforeach   
              {{ $products ->links('pagination::bootstrap-5');}}

            </div>
    </div>
    <!-- Pagination -->
    {{-- $products->appends(request()->input())->links(); --}}
    {{ $products->links('pagination::bootstrap-5');}}

@endsection