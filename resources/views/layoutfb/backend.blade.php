<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>       
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="{{asset('admin/https://fonts.googleapis.com/css?family=Muli:300,400,700')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

       

      </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Page</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">Admin</strong><strong>Panel</strong></div></a>
            <!-- Sidebar Toggle Btn-->
       
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">12 </span></a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                    <div class="status away"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                    <div class="status busy"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="{{asset('admin/img/avatar-5.jpg')}}" alt="..." class="img-fluid">
                    <div class="status offline"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
            </div>
            <!-- Tasks-->
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
              </div>
            </div>
            <!-- Tasks end-->
       
       
            <!-- Log out               -->
            <div class="list-inline-item logout"> <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav  class="sidebar_admin">
        <!-- Sidebar Header-->
        <!-- <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('/our/thoy.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Kim Thoy</h1>
            <p>Web Designer</p>
          </div>
        </div> -->
        <!-- Sidebar Navidation Menus<span class="heading">Main</span> -->
        <ul class="list-unstyled style_ul">
                <li class="active"><a href="{{route('admin.dashboard')}}"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.66,10.25l-9-8a1,1,0,0,0-1.32,0l-9,8a1,1,0,0,0-.27,1.11A1,1,0,0,0,3,12H4v9a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V12h1a1,1,0,0,0,.93-.64A1,1,0,0,0,21.66,10.25ZM13,20H11V17a1,1,0,0,1,2,0Zm5,0H15V17a3,3,0,0,0-6,0v3H6V12H18ZM5.63,10,12,4.34,18.37,10Z" fill="#ffffff"/></svg> Dashboard </a></li>
                <li><a href="{{route('category.list')}}"><svg data-name="Layer 2" id="e73e2821-510d-456e-b3bd-9363037e93e3" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"fill="#ffffff"><path d="M11.933,15.055H3.479A3.232,3.232,0,0,1,.25,11.827V3.478A3.232,3.232,0,0,1,3.479.25h8.454a3.232,3.232,0,0,1,3.228,3.228v8.349A3.232,3.232,0,0,1,11.933,15.055ZM3.479,2.75a.73.73,0,0,0-.729.728v8.349a.73.73,0,0,0,.729.728h8.454a.729.729,0,0,0,.728-.728V3.478a.729.729,0,0,0-.728-.728Z"/><path d="M11.974,34.75H3.52A3.233,3.233,0,0,1,.291,31.521V23.173A3.232,3.232,0,0,1,3.52,19.945h8.454A3.232,3.232,0,0,1,15.2,23.173v8.348A3.232,3.232,0,0,1,11.974,34.75ZM3.52,22.445a.73.73,0,0,0-.729.728v8.348a.73.73,0,0,0,.729.729h8.454a.73.73,0,0,0,.728-.729V23.173a.729.729,0,0,0-.728-.728Z"fill="#ffffff" /><path d="M31.522,34.75H23.068a3.233,3.233,0,0,1-3.229-3.229V23.173a3.232,3.232,0,0,1,3.229-3.228h8.454a3.232,3.232,0,0,1,3.228,3.228v8.348A3.232,3.232,0,0,1,31.522,34.75Zm-8.454-12.3a.73.73,0,0,0-.729.728v8.348a.73.73,0,0,0,.729.729h8.454a.73.73,0,0,0,.728-.729V23.173a.729.729,0,0,0-.728-.728Z"/><path d="M27.3,15.055a7.4,7.4,0,1,1,7.455-7.4A7.437,7.437,0,0,1,27.3,15.055Zm0-12.3a4.9,4.9,0,1,0,4.955,4.9A4.935,4.935,0,0,0,27.3,2.75Z" fill="#ffffff"/></svg>Categorys </a></li>
                <li><a href="{{route('product.index')}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g id="Product_notification"><path fill="#ffffff" d="M462.7169,108.9661A96.6815,96.6815,0,0,0,270.643,93.2312a62.5937,62.5937,0,0,0-98.4095,51.3777v18.7334h-59.228a30.3971,30.3971,0,0,0-30.3194,27.3721L55.6768,454.3462a30.478,30.478,0,0,0,30.32,33.5845h297.748a30.4778,30.4778,0,0,0,30.3193-33.5845L388.3191,203.05A96.8486,96.8486,0,0,0,462.7169,108.9661ZM184.2335,144.6089a50.58,50.58,0,0,1,85.1393-36.99c-.0063.449-.0171.8969-.0171,1.3473a96.1162,96.1162,0,0,0,16.1522,53.438v.9382H184.2335Zm107.2744,68.4516a9.5005,9.5005,0,1,1-9.501,9.5005A9.5111,9.5111,0,0,1,291.5079,213.0605Zm-113.2744,0a9.5005,9.5005,0,1,1-9.501,9.5005A9.5111,9.5111,0,0,1,178.2335,213.0605Zm223.893,242.5083a18.4777,18.4777,0,0,1-18.3818,20.3619h-6.729l-37.3491-34.9834a45.8558,45.8558,0,0,0-31.4551-12.4312H157.4527a45.8537,45.8537,0,0,0-31.4546,12.4312L88.6489,475.9307H85.9967a18.4785,18.4785,0,0,1-18.3824-20.3619L94.6236,191.937a18.4289,18.4289,0,0,1,18.3819-16.5947h59.228v26.5868a21.5007,21.5007,0,1,0,12,0V175.3423H285.5079v26.5868a21.5007,21.5007,0,1,0,12,0V177.0959a96.5392,96.5392,0,0,0,78.9567,27.9869Zm-36.09-261.9221a84.6806,84.6806,0,1,1,84.6806-84.6806A84.6806,84.6806,0,0,1,366.0363,193.6467Z"/><path fill="#ffffff" d="M405.6035,117.9059l-1.8818-20.9a37.62,37.62,0,0,0-26.1426-32.6672V62.4575a11.5428,11.5428,0,1,0-23.0855,0v1.8816a37.6185,37.6185,0,0,0-26.1425,32.6668l-1.8819,20.8977a15.2139,15.2139,0,0,0-11.2573,15.0623,15.4832,15.4832,0,0,0,15.5254,14.9314H401.332a15.4712,15.4712,0,0,0,15.53-15A15.2129,15.2129,0,0,0,405.6035,117.9059Z"/><path fill="#ffffff" d="M366.0361,171.116a18.05,18.05,0,0,0,17.8662-15.5475H348.17A18.05,18.05,0,0,0,366.0361,171.116Z"/><path fill="#ffffff" d="M331.0479,64.6929l-2.1362-5.607L326.82,53.4624c-1.0147.377-24.8491,9.6025-25.1411,41.2588l11.999.11C313.8922,71.6621,330.3477,64.9663,331.0479,64.6929Z"/><path fill="#ffffff" d="M405.252,53.4619,401.0694,64.71c.1714.0634,17.1084,6.6318,17.3247,30.1215l11.999-.11C430.1016,63.0649,406.2662,53.8394,405.252,53.4619Z"/></g></svg> Products </a></li>
                <li><a href="{{route('admin.order')}}"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#ffffff;}.cls-2{fill:#ffffff;}</style></defs><g data-name="37. Receipt" id="_37._Receipt"><path class="cls-1" d="M15,30H3a3,3,0,0,1-3-3V1A1,1,0,0,1,.62.08,1,1,0,0,1,1.71.29L3.29,1.88a1,1,0,0,0,1.42,0L6.29.29a1,1,0,0,1,1.42,0L9.29,1.88a1,1,0,0,0,1.42,0L12.29.29a1,1,0,0,1,1.42,0l1.58,1.59a1,1,0,0,0,1.42,0L18.29.29a1,1,0,0,1,1.42,0l1.58,1.59a1,1,0,0,0,1.42,0L24.29.29A1,1,0,0,1,25.38.08,1,1,0,0,1,26,1V15a1,1,0,0,1-2,0V3.41a3.07,3.07,0,0,1-4.12-.12L19,2.41l-.88.88a3.06,3.06,0,0,1-4.24,0L13,2.41l-.88.88a3.06,3.06,0,0,1-4.24,0L7,2.41l-.88.88A3.07,3.07,0,0,1,2,3.41V27a1,1,0,0,0,1,1H15a1,1,0,0,1,0,2Z"/><path class="cls-2" d="M15,25H6a1,1,0,0,1,0-2h9a1,1,0,0,1,0,2Z"/><path class="cls-2" d="M15,21H6a1,1,0,0,1,0-2h9a1,1,0,0,1,0,2Z"/><path class="cls-2" d="M17,17H6a1,1,0,0,1,0-2H17a1,1,0,0,1,0,2Z"/><path class="cls-2" d="M20,13H6a1,1,0,0,1,0-2H20a1,1,0,0,1,0,2Z"/><path class="cls-2" d="M20,9H6A1,1,0,0,1,6,7H20a1,1,0,0,1,0,2Z"/><path class="cls-2" d="M23,19h4a0,0,0,0,1,0,0v3a1,1,0,0,1-1,1H24a1,1,0,0,1-1-1V19A0,0,0,0,1,23,19Z"/><path class="cls-1" d="M29,32H21a3,3,0,0,1-3-3V21a3,3,0,0,1,3-3h8a3,3,0,0,1,3,3v8A3,3,0,0,1,29,32ZM21,20a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V21a1,1,0,0,0-1-1Z"/><path class="cls-1" d="M24,28H23a1,1,0,0,1,0-2h1a1,1,0,0,1,0,2Z"/></g></svg> Orders</a>
              
              <li><a href="{{route('admin_comment')}}"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title/><path d="M12.69,12.06a1,1,0,0,1-1.34,0L2.87,4.35A2,2,0,0,1,4,4H20a2,2,0,0,1,1.13.35Z" fill="#ffffff"/><path d="M22,6.26V17a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V6.26l8.68,7.92a2,2,0,0,0,1.32.49,2,2,0,0,0,1.33-.51Z" fill="#ffffff"/></svg> Inbox</a></li>
              

      </nav>  
      <!-- Sidebar Navigation end-->
      <div class="page-content p-4 justify-center d-block align-items-center">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        @yield('content')
      
 
   
      
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin/js/charts-home.js')}}"></script>
    <script src="{{asset('admin/js/front.js')}}"></script>
  </body>
</html>