<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auctionear</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Styles -->

        <!-- carousel -->
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        <script src="a/js/main.js"></script>
        
        <style>
         
           
        </style>
    </head>
    <body class="antialiased "> 
                      
                <!-- nav -->
      <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-light p-2 ">
      <div class="container">
        <a class="navbar-brand text-primary"  href=""><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Vehicle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">How to start</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Company
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">About Us</a></li>
                <li><a class="dropdown-item" href="#">Contact us</a></li>
              </ul>
            </li>
          </ul>
          
                    
                        <div style="margin-top:15px;"  id="btn-G" class="btn-reg">
                            @if (Route::has('login'))
                                
                                    @auth
                                        <a  href="{{ route('home') }}" class="text-decoration-none text-warning">Dashboard</a>
                                    @else
                                        <p><a  style="" href="{{ route('login') }}" type="button" class="btn btn-log text-light btn-md rounded-1">Login</a>
                                            
                                    @if (Route::has('register'))
                                                
                                        <a  style="" href="{{ route('register') }}" type="button" class="btn btn-log text-light btn-md m-1 rounded-1">Sign-up</a></p>

                                    @endif 

                                    @endauth
                                       
                                    @endif
                            </div>        
                </div>
            </div>
        </nav>
                   
         <!-- nav-end -->
      
            <!--front page -->
                <div class="container bg-waves text-start">
                      <div class="row">
                            <div class="col-sm-5 col-md-6 mt-5">   <p style="color:#FF6C22; font-size:3vh">
                                  Welcome To Auctionear
                                </p>

                                <h1 style=" font-size:8vh;" class="text-primary">Bid, Sell & Collect Vehicle Items.</h1>
                                <p style="color:#4E413B;">
                                    And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
                                </p>
                                <a  style="" href="{{ route('register') }}" type="button" class="btn btn-start btn-lg text-light rounded-3">Start Auction  </a></p></div>
                                    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 mt-2">
                                    <img src="assets/images/bigbike.jpg" class="col-md-6 float-md-end sm-w-100 mb-3 ms-md-3 w-100 h-100 rounded" alt="...">
                            </div>
                      </div>
                  </div> 
                </div>
            <!-- <div class="clearfix container mt-5">
                <img src="assets/images/bigbike.jpg" class="col-md-6 float-md-end sm-w-100 mb-3 ms-md-3 w-50" alt="...">
                <div style="position:relative; top:50px;" class="intro">
                <p class="text-success">
                   Welcome To Auctionear
                </p>

                <h1>Bid, Sell & Collect Vehicle Items</h1>
                <p>
                    And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
                </p>
                <a  style="" href="{{ route('register') }}" type="button" class="btn  btn-lg  rounded-4">Sign-up</a></p>

                </div>
                
            </div> -->

           

            <!-- columns -->
                <div style="margin-top:100px;" class="vision container text-center ">
                  <div class="row align-items-start">
                      <div class="col ">
                    <h2 class="text-primary">WE LOVE OUR CUSTOMERS</h2>
                      <p>We are known to provide best possible service ever</p>
                      </div>
                      <div class="col">
                      <h2 class="text-primary">WE LOVE OUR CUSTOMERS</h2>
                      <p>We are known to provide best possible service ever</p>
                      </div>
                      <div class="col">
                      <h2 class="text-primary">WE LOVE OUR CUSTOMERS</h2>
                      <p>We are known to provide best possible service ever</p>
                      </div>
                  </div>
                </div>
            
            <!-- columns end-->


              <!-- start an auction -->
              <div style="margin-top:50px;" class="about container text-center ">
                  <div class="row align-items-start">
                      <div class="col ">
                    <h1 class="text-primary"><a href="" style="text-decoration:none">HOW TO START</a></h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                  </div>
                </div>
                 <!-- start an auction end -->


            <!--Types Vehicle -->
            <section class="vehicle container">
            <div class="row mt-5">
              <h1 class="text-center text-primary" >AVAILABLE VEHICLE</h1>
              <h6 class="text-center mb-5" style="color: #FF6C22;">Click to view every vehicle descriptions !</h6>
            <div class="column">
              <div class="card">
                <img src="assets/images/bigbike.jpg" alt="">
                <p class=" mt-3 text-primary">MOTORCYCLE</p>
              </div>
            </div>

            <div class="column">
              <div class="card">
               <img src="assets/images/bigbike.jpg" alt="">
               <p class=" mt-3 text-primary">SEDAN</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
               <img src="assets/images/bigbike.jpg" alt="">
               <p class=" mt-3 text-primary">SUV</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
               <img src="assets/images/bigbike.jpg" alt="">
               <p class=" mt-3 text-primary">VAN</p>
              </div>
            </div>
          </div>
          </section>


             <!-- Vehicle end-->

                <!-- about -->

                <div style="margin-top:50px;" class="about container text-center ">
                  <div class="row align-items-start">
                      <div class="col ">
                    <h1 class="text-primary">ABOUT US</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                  </div>
                </div>
             
            <!-- about-end -->

            <!-- contact form -->
              <!-- Wrapper container -->
              <div class="container py-4 pt-5">
                    <H1 class="text-center" style="color: #FF6C22;">CONTACT US</H1>
              <!-- Bootstrap 5 starter form -->
              <form id="contactForm ">

                <!-- Name input -->
                <div class="contact mb-3 col-md-7 m-auto">
                  <label class="form-label " for="name">Name</label>
                  <input class="form-control border-primary-subtle" id="name" type="text"  />
                </div>

                <!-- Email address input -->
                <div class="contact mb-3 col-md-7 m-auto">
                  <label class="form-label" for="emailAddress">Email Address</label>
                  <input class="form-control border-primary-subtle" id="emailAddress" type="email" />
                </div>

                <!-- Contact input -->
                   <div class="contact mb-3 col-md-7 m-auto">
                  <label class="form-label" for="message">Contact Number</label>
                  <input class="form-control border-primary-subtle" id="message" type="number"></input>
                </div>

                <!-- Message input -->
                <div class="contact mb-3 col-md-7 m-auto">
                  <label class="form-label" for="message">Message</label>
                  <textarea class="form-control border-primary-subtle" id="message" type="text"  style="height: 10rem;"></textarea>
                </div>

                <!-- Form submit button -->
                <div class="contact d-grid  col-md-7 m-auto">
                  <button class="btn btn-lg" type="submit">Submit</button>
                </div>

              </form>

              </div>

            <!-- contact form end-->
            
            <!-- Footer -->
            <section class="mt-4">
            <footer class="text-center text-light bg-primary">
              <div class="container p-4 pb-0">
                <section class="">
                  <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">Get started</span>
                   <a href="{{ route('register') }}"> <button type="button" class="btn btn-outline-light btn-rounded">
                      Sign up!
                    </button></a>
                  </p>
                </section>
              </div>
             <div class="text-center p-3" style="background-color:#FF6C22 ;">
                <p class="text-white" href="">   © 2024 Copyright</p>
              </div>
             </footer>
            <!-- Footer -->
          </section>

          
            <!-- script file -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
        
     
    </body>
</html>
