<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fashion4kh</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('general.css')}}">
<link rel="icon" href="{{asset('team/fashion4kh.jpg')}}">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

</head>
<body>

  <nav class="navbar navbar-expand-lg p-2 mb-2 bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand text-warning bold   poppins-thin" href="#"><h3 class="style_logo"><span id="span">Fahsion4Kh</span></h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav_hover">
            @guest


            <li class="nav-item">
            <a class="nav-link btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
             Login
            </a>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content p-3">
                  <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Login Form</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
               
                  <!-- form -->
                  
               <!-- Session Status -->
               <div >
               <x-auth-session-status class="mb-4 btn btn-success" :status="session('status')" />

               <form   method="POST" action="{{ route('login') }}">
                  @csrf

                  <!-- Email Address -->
                  <div >
                        <x-input-label for="email" :value="__('Email')" class="text-black" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required   class="form-control"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
            

                  <!-- Password -->
                  <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-black" />

                        <x-text-input id="password" class="block mt-1 w-full form-control"
                                       type="password"
                                       name="password"
                                       required  />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>


                  <!-- Remember Me -->
                  <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                           <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                           <span class="ms-2 text-sm text-black">{{ __('Remember me') }}</span>
                        </label>
                  </div>

                  <div class="flex items-center justify-end mt-4">
                  @if (Route::has('password.request'))
                           <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                              {{ __('Forgot your password?') }}
                           </a>
                        @endif

                        <x-primary-button class="ms-3 " style="padding:1rem 2rem;background: blue;color: white;border: none;outline: none;border-radius: 5px;">
                           {{ __('Log in') }}
                        </x-primary-button>
                        <br>
                      
                  </div>
               </form>
               </div>

                     <!-- endform -->
               
               
               </div>
            </div>
            </div>
            </li>

             <li class="nav-item">
               <!-- Button trigger modal -->
<a class="btn nav-link " data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
  Register
</a>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-black" />
            <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-black" />
            <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" class="text-black" />
            <x-text-input id="phone" class="block mt-1 w-full form-control" type="text" name="phone" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" class="text-black" />
            <x-text-input id="address" class="block mt-1 w-full form-control" type="text" name="address" required autocomplete="username" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-black" />

            <x-text-input id="password" class="block mt-1 w-full form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-black" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 btn btn-primary">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
      </div>
     
    </div>
  </div>
</div>
             </li>
             <li class="nav-item ">
               <a class="nav-link " href="{{route('home.shop')}}">Shop</a>
             </li>
             <li class="nav-item text-white">
             <a href="{{ route('about.form') }}" class="nav-link">About Us</a>
             </li>
            @else
            <li class="nav-item">
              <a class="nav-link  " aria-current="page" href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="nav-item ">
               <a class="nav-link " href="{{route('home.shop')}}">Shop</a>
             </li>
             
        
            
          
            <li class="nav-item">
               <a class="nav-link " href="{{route('home.faqs')}}">FAQs & guides</a>
             </li>
          
             <li class="nav-item">
              <a  class="nav-link " href="{{route('profile.edit')}}">
                
               My Profile</a>
           
             </li>
             <li class="nav-item text-white">
             <a href="{{ route('about.form') }}" class="nav-link">About Us</a>
             </li>
           
            @endguest
           
          </ul>
          
          <form class="d-flex" role="search" method="get" action="{{ route('search_product') }}">
  <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
  <button class="btn btn-primary btn-sm text-white btn_wishlist" type="submit">Search</button>
</form>


         
             
              <a  class="btn btn-info m-4 position-relative btn_wishlist" href="{{route('wishlist.view')}} "><i class="fa-solid fa-heart"></i> 
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <span id="wishlist-count">{{$wishlistCount}}</span>
    <span class="visually-hidden">unread messages</span>
             
   
              </a>
            <a class="btn btn-success position-relative btn_wishlist" href="{{ route('home.cart') }}"  type="submit"> Cart
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ count((array) session('cart')) }}
    <!-- <span class="visually-hidden">unread messages</span>
               -->
            </a>
        </div>
      </div>
  </nav>
  <section id="slide">

  </section>
  @if(session('message_comment'))
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Primary!</strong> {{ session('message_comment') }}
            </div>
        @endif

    @yield('content')


    <div class="bg">

    <div class="row">
    <div class="col-7 ">
 
  <div class="comment">
  
        <form action="{{route('comment')}}" method="post">
          @csrf
          <div >
          <input type="email" class="form-control shadow p-3 mb-5 bg-body-tertiary rounded" placeholder="name@example.com" name="email" required>
           
          </div>
          <div >
            <textarea class="form-control shadow p-3 mb-1 bg-body-tertiary rounded" placeholder="Type message ..."  style="height: 100px" name="comment" required></textarea>
            
          </div>
          <div>
          <br>
            <button type="submit" class="btn btn-primary btn_wishlist shadow p-1 mb-1  rounded">Submit</button>
          </div>
        </form>
    </div>

    </div>
    <div class="col shadow p-5 mb-5 bg-body-tertiary rounded ">
    If you have any questions or concerns regarding our services, payments, shipping, or functional requirements, please leave a comment in our inbox. We will respond within 2-3 days.
    </div>
  </div>
  </div>

    <footer class="text-bg-info p-2 mt-4 text-white" >
      <div class="container text-center ">
        <div class="row">
          <div class="col font_google">
            <h3>About Us</h3>
            <p class="font_google">Our team created this Website for Assignment and Homework</p>
          </div>
          <div class="col font_google">
            <h3>Contact Us</h3>
            <ul class="list-group list-group-flush font_google">
              <li class="list-group-item text-bg-info text-white">Email : pheangtiger03@gmail.com</li>
              <li class="list-group-item text-bg-info text-white">Tel : 088 42 10 655</li>
              <li class="list-group-item text-bg-info text-white">Telegram : @kim_thoy</li>
              
            </ul>
          </div>
          <div class="col font_google">
            <h3 >Location</h3>
            <ul class="list-group list-group-flush font_google">
              <li class="list-group-item text-bg-info text-white"><address> #15B2,st.50MC,Phum Russie2, Sangkat Stueng Meanchey, Khan Mean Chey, Phnom Penh</address></li>
             <li  class="list-group-item text-bg-info text-white">
             <a class="nav-link btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
             Login as Admin
            </a>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content p-3">
                  <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Login Form</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
               
                  <!-- form -->
                  
               <!-- Session Status -->
               <div >
               <x-auth-session-status class="mb-4 btn btn-success" :status="session('status')" />

               <form   method="POST" action="{{ route('login') }}">
                  @csrf

                  <!-- Email Address -->
                  <div >
                        <x-input-label for="email" :value="__('Email')" class="text-black" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus   class="form-control" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
            

                  <!-- Password -->
                  <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-black" />

                        <x-text-input id="password" class="block mt-1 w-full form-control"
                                       type="password"
                                       name="password"
                                       required />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>


                  <!-- Remember Me -->
                  <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                           <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                           <span class="ms-2 text-sm text-black">{{ __('Remember me') }}</span>
                        </label>
                  </div>

                  <div class="flex items-center justify-end mt-4">
                  @if (Route::has('password.request'))
                           <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                              {{ __('Forgot your password?') }}
                           </a>
                        @endif

                        <x-primary-button class="ms-3 " style="padding:1rem 2rem;background: blue;color: white;border: none;outline: none;border-radius: 5px;">
                           {{ __('Log in') }}
                        </x-primary-button>
                        <br>
                      
                  </div>
               </form>
               </div>

                     <!-- endform -->
               
              
               </div>
            </div>
            </div>
             </li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center footer_tage">
       
        
   
       
           
      <p>@Copy right by <a class="nav_link" href="#">Kim Thoy</a> |  All rights reserved.</p>
      </div>
    </footer>
    <script>
  $.ajax({
    type: 'POST',
    url: "{{ route('wishlist.add')}}",
    data: {
        _token: '{{ csrf_token() }}',
        product_id: productId,
    },
    success: function(response) {
        $('#wishlist-count').text(response.wishlistCount); // Update the count in the button
        alert('Product added to your wishlist!');
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
