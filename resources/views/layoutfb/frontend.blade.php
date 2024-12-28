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

  <nav class="navbar navbar-expand-lg p-2 mb-2 ">
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
          
  <div class="input-container">
    <input type="text" name="text" class="input" placeholder="Search something...">
  <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" class="icon"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <rect fill="white" height="24" width="24"></rect> <path fill="" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
    </div>


         
             
              <a  class="btn m-4 position-relative btn_wishlist" href="{{route('wishlist.view')}} "><i class="fa-solid fa-heart"></i> 
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <span id="wishlist-count">{{$wishlistCount}}</span>
    <span class="visually-hidden">unread messages</span>
             
   
              </a>
            <a class="btn position-relative btn_wishlist" href="{{ route('home.cart') }}"  type="submit"> Cart
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
          <input type="email" class=" form-control shadow p-3 mb-5 bg-body-tertiary rounded" placeholder="name@example.com" name="email" required>
           
          </div>
          <div >
            <textarea class=" form-control shadow p-3 mb-1 bg-body-tertiary rounded" placeholder="Type message ..."  style="height: 100px" name="comment" required></textarea>
            
          </div>
          <div>
          <br>
          
            
<button class="button" type="submit">
  <div class="outline"></div>
  <div class="state state--default">
    <div class="icon">
      <svg
        width="1em"
        height="1em"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <g style="filter: url(#shadow)">
          <path
            d="M14.2199 21.63C13.0399 21.63 11.3699 20.8 10.0499 16.83L9.32988 14.67L7.16988 13.95C3.20988 12.63 2.37988 10.96 2.37988 9.78001C2.37988 8.61001 3.20988 6.93001 7.16988 5.60001L15.6599 2.77001C17.7799 2.06001 19.5499 2.27001 20.6399 3.35001C21.7299 4.43001 21.9399 6.21001 21.2299 8.33001L18.3999 16.82C17.0699 20.8 15.3999 21.63 14.2199 21.63ZM7.63988 7.03001C4.85988 7.96001 3.86988 9.06001 3.86988 9.78001C3.86988 10.5 4.85988 11.6 7.63988 12.52L10.1599 13.36C10.3799 13.43 10.5599 13.61 10.6299 13.83L11.4699 16.35C12.3899 19.13 13.4999 20.12 14.2199 20.12C14.9399 20.12 16.0399 19.13 16.9699 16.35L19.7999 7.86001C20.3099 6.32001 20.2199 5.06001 19.5699 4.41001C18.9199 3.76001 17.6599 3.68001 16.1299 4.19001L7.63988 7.03001Z"
            fill="currentColor"
          ></path>
          <path
            d="M10.11 14.4C9.92005 14.4 9.73005 14.33 9.58005 14.18C9.29005 13.89 9.29005 13.41 9.58005 13.12L13.16 9.53C13.45 9.24 13.93 9.24 14.22 9.53C14.51 9.82 14.51 10.3 14.22 10.59L10.64 14.18C10.5 14.33 10.3 14.4 10.11 14.4Z"
            fill="currentColor"
          ></path>
        </g>
        <defs>
          <filter id="shadow">
            <fedropshadow
              dx="0"
              dy="1"
              stdDeviation="0.6"
              flood-opacity="0.5"
            ></fedropshadow>
          </filter>
        </defs>
      </svg>
    </div>
    <p>
      <span style="--i:0">S</span>
      <span style="--i:1">e</span>
      <span style="--i:2">n</span>
      <span style="--i:3">d</span>
      <span style="--i:4">M</span>
      <span style="--i:5">e</span>
      <span style="--i:6">s</span>
      <span style="--i:7">s</span>
      <span style="--i:8">a</span>
      <span style="--i:9">g</span>
      <span style="--i:10">e</span>
    </p>
  </div>
  <div class="state state--sent">
    <div class="icon">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        height="1em"
        width="1em"
        stroke-width="0.5px"
        stroke="black"
      >
        <g style="filter: url(#shadow)">
          <path
            fill="currentColor"
            d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z"
          ></path>
          <path
            fill="currentColor"
            d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z"
          ></path>
        </g>
      </svg>
    </div>
    <p>
      <span style="--i:5">S</span>
      <span style="--i:6">e</span>
      <span style="--i:7">n</span>
      <span style="--i:8">t</span>
    </p>
  </div>
</button>

          </div>
        </form>
    </div>

    </div>
    <div class="col shadow p-5 mb-5 bg-body-tertiary rounded ">
    If you have any questions or concerns regarding our services, payments, shipping, or functional requirements, please leave a comment in our inbox. We will respond as soon as .
    </div>
  </div>
  </div>

    <footer class="text-bg-info p-2 mt-4 text-white" >
      <div class="container text-center ">
        <div class="row p-4">
          <div class="col font_google">
          <div class="typewriter">
              <div class="slide"><i></i></div>
              <div class="paper"></div>
              <div class="keyboard"></div>
          </div>

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
