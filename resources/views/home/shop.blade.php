
@extends('layoutfb.frontend')
@section('content')


<section>
    @php
    $categories = App\Models\Category::all();
    @endphp
    @if (count(array($categories)) > 0)
        <div class="col-12 shadow p-1 mb-5 bg-body-tertiary rounded">
            <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                <li><a href="{{route('home.shop')}}" class="p-2 nav-link padding_left text-black">All</a></li>
                @foreach ($categories as $category)
                    <li><a class="btn_wishlist p-2 nav-link text-black" href="{{route('home.getByCategory', $category->id)}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="text-center mb-2 bg-body-secondary p-4 mt-4">
        <h1 class="text-danger" style="background-image: url('/image/bg1.png'); background-size: cover; background-position: center; border-top-left-radius: 10px; border-top-right-radius: 10px; padding:1.2rem">New Arrival</h1>
    </div>

    <div class="container text-center">
        @if(session('success'))
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Primary!</strong> {{ session('success') }}
            </div>
        @endif
        @if(session('message'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Primary!</strong> {{ session('message') }}
            </div>
        @endif
        @if(session('message_wishlist'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Primary!</strong> {{ session('message_wishlist') }}
            </div>
        @endif
        <!-- Example: home.shop view -->


        <div class="row">
            @foreach ($product as $products)
            
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card box_shadow" style="width: 100%;">
                        <a href="{{ route('cart_detail', $products->id) }}">
                            <img src="/img/{{$products->image}}" class="card-img-top object-fit-fill" alt="...">
                            <span class="shadow p-3 bg-body-tertiary rounded text-black product_view">View</span>
                        </a>

                        <!-- Rating Stars -->
                        @php
                        $averageRating = $products->ratings->avg('rating') ?? 0;
                        $fullStars = floor($averageRating);
                        $halfStar = ($averageRating - $fullStars >= 0.5);
                        $userRating = $products->ratings()->where('user_id', auth()->id())->first();
                        @endphp
                        <div class="rating">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $fullStars)
                                    <span class="fa fa-star checked"></span>
                                @elseif ($i == $fullStars + 1 && $halfStar)
                                    <span class="fa fa-star-half-alt checked"></span>
                                @else
                                    <span class="fa fa-star"></span>
                                @endif
                            @endfor
                        </div>

                        <!-- Rating Form (only if user has not rated) -->
                        @if (is_null($userRating))
                            <form action="{{ route('rating.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                <label for="rating">Rate this product</label><br>
                                <select name="rating" id="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <button type="submit" class="btn outline_btn btn-sm">Rate</button>
                            </form>
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{$products->name}}</h5>
                            Price : <span> ${{$products->price}}</span>
                            <form action="{{ route('wishlist.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                <button class="btn_wishlist btn m-1" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                    </svg>
                                </button>
                            </form>
                            <div>
                                <a id="outline_btn" href="{{ route('add.to.cart', $products->id) }}" class="btn text-black btn-sm outline_btn">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $product->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>

    <section>
      <div>
         <div class="text-center p-3 mb-2 bg-body-secondary mt-4">

            <h1 class="p-4 text-center">Related Product</h1>
            <p>There are awasome for you</p>
         </div>
         <div class="container text-center">
            <div class="row">
               @foreach ($product as $products)
              <div class="col">
               <div class="card box_shadow" style="width: 13rem;">
                  <a href="{{ route('cart_detail', $products->id) }}"><img src="/img/{{$products->image}}" class="card-img-top" alt="..."><span class="shadow p-3 bg-body-tertiary rounded text-black product_view ">View</span></a>
                  
                  <div class="card-body">
                    <h5 class="card-title">LJ3_Raspberry</h5>
                    <p class="card-text">Please click here to view product property</p>
                   
                  </div>
                </div>
                <br>
              </div>
             
              @endforeach  
            </div>
          </div>
          
        
      </div>
    </section>



@endsection