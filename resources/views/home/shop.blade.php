
@extends('layoutfb.frontend')
@section('content')


<section>
    @php
    $categories = App\Models\Category::all();
    @endphp
    @if (count(array($categories)) > 0)
        <div class="col-12 " style="background: transparent;">
            <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                <li><a href="{{route('home.shop')}}" class="p-2 nav-link padding_left text-black">All</a></li>
                @foreach ($categories as $category)
                    <li><a class=" p-2 nav-link text-black" href="{{route('home.getByCategory', $category->id)}}">{{$category->name}}</a></li>
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
                    <div class="box_shadow" style="width: 100%;">
                    
                        <a href="{{ route('cart_detail', $products->id) }}">
                            <img src="/img/{{$products->image}}" class="card-img-top object-fit-fill" alt="...">
                            
                            <span class="shadow p-3 bg-body-tertiary rounded text-black product_view ">View</span>
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
         <div class="text-center p-3 mb-2 bg-body-secondary mt-4 ">
            <div class="row">
                <div class="col-8">
                <h1 class="p-4 text-center">Related Product</h1>
                <p>There are awasome for you</p>
                </div>

                <div class="col-4">
                <div class="loader">
            <div class="truckWrapper">
                <div class="truckBody">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 198 93"
                    class="trucksvg"
                >
                    <path
                    stroke-width="3"
                    stroke="#282828"
                    fill="#F83D3D"
                    d="M135 22.5H177.264C178.295 22.5 179.22 23.133 179.594 24.0939L192.33 56.8443C192.442 57.1332 192.5 57.4404 192.5 57.7504V89C192.5 90.3807 191.381 91.5 190 91.5H135C133.619 91.5 132.5 90.3807 132.5 89V25C132.5 23.6193 133.619 22.5 135 22.5Z"
                    ></path>
                    <path
                    stroke-width="3"
                    stroke="#282828"
                    fill="#7D7C7C"
                    d="M146 33.5H181.741C182.779 33.5 183.709 34.1415 184.078 35.112L190.538 52.112C191.16 53.748 189.951 55.5 188.201 55.5H146C144.619 55.5 143.5 54.3807 143.5 53V36C143.5 34.6193 144.619 33.5 146 33.5Z"
                    ></path>
                    <path
                    stroke-width="2"
                    stroke="#282828"
                    fill="#282828"
                    d="M150 65C150 65.39 149.763 65.8656 149.127 66.2893C148.499 66.7083 147.573 67 146.5 67C145.427 67 144.501 66.7083 143.873 66.2893C143.237 65.8656 143 65.39 143 65C143 64.61 143.237 64.1344 143.873 63.7107C144.501 63.2917 145.427 63 146.5 63C147.573 63 148.499 63.2917 149.127 63.7107C149.763 64.1344 150 64.61 150 65Z"
                    ></path>
                    <rect
                    stroke-width="2"
                    stroke="#282828"
                    fill="#FFFCAB"
                    rx="1"
                    height="7"
                    width="5"
                    y="63"
                    x="187"
                    ></rect>
                    <rect
                    stroke-width="2"
                    stroke="#282828"
                    fill="#282828"
                    rx="1"
                    height="11"
                    width="4"
                    y="81"
                    x="193"
                    ></rect>
                    <rect
                    stroke-width="3"
                    stroke="#282828"
                    fill="#DFDFDF"
                    rx="2.5"
                    height="90"
                    width="121"
                    y="1.5"
                    x="6.5"
                    ></rect>
                    <rect
                    stroke-width="2"
                    stroke="#282828"
                    fill="#DFDFDF"
                    rx="2"
                    height="4"
                    width="6"
                    y="84"
                    x="1"
                    ></rect>
                </svg>
                </div>
                <div class="truckTires">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 30 30"
                    class="tiresvg"
                >
                    <circle
                    stroke-width="3"
                    stroke="#282828"
                    fill="#282828"
                    r="13.5"
                    cy="15"
                    cx="15"
                    ></circle>
                    <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                </svg>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 30 30"
                    class="tiresvg"
                >
                    <circle
                    stroke-width="3"
                    stroke="#282828"
                    fill="#282828"
                    r="13.5"
                    cy="15"
                    cx="15"
                    ></circle>
                    <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                </svg>
                </div>
                <div class="road"></div>

                <svg
                xml:space="preserve"
                viewBox="0 0 453.459 453.459"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns="http://www.w3.org/2000/svg"
                id="Capa_1"
                version="1.1"
                fill="#000000"
                class="lampPost"
                >
                <path
                    d="M252.882,0c-37.781,0-68.686,29.953-70.245,67.358h-6.917v8.954c-26.109,2.163-45.463,10.011-45.463,19.366h9.993
            c-1.65,5.146-2.507,10.54-2.507,16.017c0,28.956,23.558,52.514,52.514,52.514c28.956,0,52.514-23.558,52.514-52.514
            c0-5.478-0.856-10.872-2.506-16.017h9.992c0-9.354-19.352-17.204-45.463-19.366v-8.954h-6.149C200.189,38.779,223.924,16,252.882,16
            c29.952,0,54.32,24.368,54.32,54.32c0,28.774-11.078,37.009-25.105,47.437c-17.444,12.968-37.216,27.667-37.216,78.884v113.914
            h-0.797c-5.068,0-9.174,4.108-9.174,9.177c0,2.844,1.293,5.383,3.321,7.066c-3.432,27.933-26.851,95.744-8.226,115.459v11.202h45.75
            v-11.202c18.625-19.715-4.794-87.527-8.227-115.459c2.029-1.683,3.322-4.223,3.322-7.066c0-5.068-4.107-9.177-9.176-9.177h-0.795
            V196.641c0-43.174,14.942-54.283,30.762-66.043c14.793-10.997,31.559-23.461,31.559-60.277C323.202,31.545,291.656,0,252.882,0z
            M232.77,111.694c0,23.442-19.071,42.514-42.514,42.514c-23.442,0-42.514-19.072-42.514-42.514c0-5.531,1.078-10.957,3.141-16.017
            h78.747C231.693,100.736,232.77,106.162,232.77,111.694z"
                ></path>
                </svg>
            </div>
            </div>
                </div>
            </div>
            
            
         </div>
       
            

         <div class="container text-center ">
            <div class="row">
               @foreach ($product as $products)
              <div class="col col-sm-6 col-md-4 col-lg-3">
               <div class=" box_shadow" style="width: 13rem;">
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