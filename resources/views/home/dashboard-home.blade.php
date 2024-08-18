
@extends('layoutfb.frontend')
@section('content')
<div class="slide_bar">
      <p style="background-image: url('/image/bg1.png'); background-size: cover; background-position: center; border-top-left-radius: 10px; border-top-right-radius: 10px; padding:1.2rem">Welcome to Our Shop</p>
    </div>
<div class="container ">

<div class="row">
    <!-- Information Section -->
    <div class="col-7 poppins-thin p-4">
    <span class="info_home">
    Please be informed that when you use my service, certain data and information may be collected automatically in the event of an error in the app. This data, referred to as Log Data, might include details such as your device’s Internet Protocol (IP) address, device name, operating system version, and other relevant information collected through third-party services.
</span>
        <br>
        <a href="#" class="btn btn-primary mt-4">Get Started</a>
    </div>

    <!-- Carousel Section -->
    <div class="col-4 shadow p-3 mb-1 bg-body-tertiary rounded">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500" data-bs-pause="hover" style="width: 300px; height: 200px;">
            <!-- Indicators -->
          

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <span style="width:140px;height:320px;background:black;color:white;padding: 1rem;margin:10px;border-radius: 13px;">For sale</span>
                    <img src="./img/LJ3_Sapphire__11722823597.png" class="d-block w-100" alt="Slide 1" style="height: 100%; object-fit: cover;">
                </div>
                <div class="carousel-item">
                <span style="width:140px;height:320px;background:black;color:white;padding: 1rem;margin:10px;border-radius: 13px;">Arrival product for this month</span>

                    <img src="./img/LJ3_Raspberry__11722823449.png" class="d-block w-100" alt="Slide 2" style="height: 100%; object-fit: cover;">
                </div>
                <div class="carousel-item">
                <span style="width:140px;height:320px;background:black;color:white;padding: 1rem;margin:10px;border-radius: 13px;">Discount 20% offer</span>

                    <img src="./img/LJ3_White__11722823886.png" class="d-block w-100" alt="Slide 3" style="height: 100%; object-fit: cover;">
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>



</div>


    <section>
      <div>
         <div class="text-center p-3 mb-2 bg-body-secondary ">

            <h1 class="p-4 text-center poppins-medium">Best Product</h1>
            <p>This are awasome for you <span><a class="btn btn-success" href="{{route('home.shop')}}">Buy now</a></span></p>
         </div>
         <div class="container text-center">
            <div class="row">
              <div class="col">
               <div class="card box_shadow" style="width: 13rem;">
                  <img src="./img/LJ3_Sapphire__11722823597.png" class="card-img-top" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title">LJ3_Sapphire</h5>
                    <p class="card-text">Click here for a shopping !!!</p>
                    <a href="{{route('home.shop')}}" class="btn btn-outline-primary display_hide">View more</a>
                  </div>
                </div>
              </div>
              <div class="col">
               <div class="card box_shadow" style="width: 13rem;">
                  <img src="./img/LJ3_Raspberry__11722823449.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">LJ3_Raspberry</h5>
                    <p class="card-text">Click here for a shopping !!!</p>
                    <a href="{{route('home.shop')}}" class="btn btn-outline-primary">View more</a>
                  </div>
                </div>
              </div>
              <div class="col">
               <div class="card box_shadow" style="width: 13rem;">
                  <img src="./img/LJ3_White__11722823886.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">LJ3_White</h5>
                    <p class="card-text">Click here for a shopping !!!</p>
                    <a href="{{route('home.shop')}}" class="btn btn-outline-primary">View more</a>
                  </div>
                </div>
              </div>
              <div class="col">
               <div class="card box_shadow" style="width: 13rem;">
                  <img src="./img/LJ95_Sky__1_f1054bd8-e05d-4d01-b1722824801.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">LJ95_Sky</h5>
                    <p class="card-text">Click here for a shopping !!!</p>
                    <a href="{{route('home.shop')}}" class="btn btn-outline-primary">View more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
      </div>
    </section>
    <section class="mt-4 ">
      <div class="text-center p-3 mb-2  bg-body-secondary mt-4 ">
        <h1 class="text-primary ">Meet Our Team Developer</h1>
        <p class="poppins-medium">Our team typically takes about 4 weeks to complete a website project. </p>
      </div>
      <div class="container text-center mt-5">
         <div class="row ">
           <div class="col team_hover ">
            <div class="card team" style="width: 12rem; height: 26rem;">
              <img src="our/nakhim1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-primary">Khim Nakhim</h5>
                <p class="card-text poppins-medium">Support Team, Developers, and Leadership Team</p>
              </div>
             
            </div>
           </div>
           <div class="col team_hover">
            <div class="card team" style="width: 12rem;height: 26rem;">
              <img src="/our/rathanak.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-primary">Khoy Rathanak</h5>
                <p class="card-text poppins-medium">Support Team, Developer and Member Team</p>
              </div>
              
            </div>
           </div>
           <div class="col team_hover">
            <div class="card team" style="width: 12rem;height: 26rem;">
              <img src="/our/vitu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-primary">Khim Vitu</h5>
                <p class="card-text poppins-medium">Team developer and team member</p>
              </div>
            
             
            </div>
           </div>
           <div class="col team_hover">
            <div class="card team" style="width: 12rem; height: 26rem;">
              <img src="/our/thoy.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-primary">Kim Thoy</h5>
                <p class="card-text poppins-medium">Developer and team member for developer</p>
              </div>
              
              
            </div>
          </div>
         </div>
       </div>
    </section>

    <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
@endsection

<!-- <div class="slide_show">
<div id="carouselExampleIndicators" class="carousel slide ">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner  rounded-4 ">
    <div class="carousel-item active ">
      <img src="./img/LJ3_Sapphire__11722823597.png" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item ">
      <img src="./img/LJ3_Raspberry__11722823449.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="./img/LJ3_White__11722823886.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src=" ./img/LJ95_Sky__1_f1054bd8-e05d-4d01-b1722824801.png " class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span style="background-color: black;" class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span style="background-color: black;" class="carousel-control-next-icon " aria-hidden="true"></span>
    <span class="visually-hidden ">Next</span>
  </button>
</div>

</div> -->