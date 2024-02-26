<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auctionear</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="assets/js/main.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Styles -->

        <!-- carousel -->
        
        <style>
         
           
        </style>
    </head>
    <body class="bg-waves"> 
                      
                <!-- nav -->
      <nav id="NavBar" class="navbar fixed-top navbar-expand-lg navbar-light bg-warning p-2 shadow">
      <div class="container-md ">
        <a class="navbar-brand text-primary"  href=""><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#vehicle">Vehicle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#start">How to start</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#contact">Contact Us</a>
            </li>
          </ul>
          
                    
                        <div style="margin-top:15px;"  id="btn-G" class="btn-reg ms-auto">
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
               <!-- Intro Starts -->
               <div style="margin-top:100px;" class="bg-cover cover-responsive">
                  <div class="intro d-flex container-fluid flex-direction-column flex-direction-md-row flex-wrap flex-wrap-md-nowrap">
                    <div id="introduction" class="container-fluid-md  w-md-50 order-md-2 overflow-hidden">
                      <div id="intro-img-holder" class="col-11 row justify-content-center m-0 p-0">
                        <img id="intro-img" class="img-fluid" src="assets/images/intro.jpg.png" alt="intro img"  data-aos="fade-left">
                      </div>

                    </div>
                    <div class="auctionearTittle container-md w-md-50 d-md-flex justify-content-center align-items-center flex-column">
                      <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-0 double-gutter-md-left-padding "  data-aos="fade-right">
                          <h1 class="navbar-brand text-primary"  href=""><b>Auctio<span style="color:#FF6C22;">near</span></b></h1>
                          <p class="text-quote text-start  text-md-left text-dark">"Welcome to our online auction! Explore, bid, and win your favorite items from the comfort of your home. Start bidding now and discover exciting treasures awaiting you!"</p>
                          <a style="text-decoration:none;" href="{{ route('register') }}"><button id="request-invite-btn" type="button" class="btn btn-lg text-white align-item-center">Register now</button> </a>
                      </div>
                        
                    </div>
                  </div>
                </div>
              <!-- Intro Ends -->
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
                <div style="margin-top:100px;" class="vision container text-center shadow p-5 ">
                <h1 class="text-light">OUR VALUES</h1>
                  <div class="row align-items-start container mx-auto">
                      <div class="col bg-light p-5 shadow m-3" data-aos="fade-right">
                        <h2 class="" style="color:#FF6C22;" >Mission</h2>
                          <p class="color-grayish-blue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur?</p>
                      </div>
                      <div class="col bg-light p-5  shadow m-3" data-aos="fade-up">
                        <h2 class="" style="color:#FF6C22;" >Vision</h2>
                          <p class="color-grayish-blue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur?</p>
                      </div>
                      <div class="col bg-light p-5 m-3 shadow" data-aos="fade-left">
                        <h2 class="" style="color:#FF6C22;">Goal</h2>
                          <p class="color-grayish-blue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur?</p>
                      </div>
                  </div>
                </div>
            
            <!-- columns end-->


              <!-- start an auction -->
              <div id="start" style="margin-top:80px; z-index:;" class="start container text-center shadow p-5">
                  <div class="row  mx-auto container mx-auto">
                          <div style="background-color:#FF6C22;" class="col p-5 shadow m-3" data-aos="fade-right">
                          <h1 class="text-light" >HOW TO START</h1>
                          <p class="text-light mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi explicabo ex iure similique necessitatibus porro tempora esse omnis veritatis amet, obcaecati quibusdam non officia illo enim quod! Fugit, quam. Quam.</p>
                          </div>
                  </div>
              </div>

                 <!-- start an auction end -->


            <!--Types Vehicle -->
            <section id="vehicle" style="margin-top:80px;" class="bg-image img-responsive vehicle container p-5 shadow" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <div class="pad-about row container mx-auto p-5">
              <h1 class="text-center" style="color:#FF6C22" >AVAILABLE VEHICLE</h1>
              <h6 class="text-center mb-5 text-warning" >Click to view every vehicle descriptions !</h6>
            <div class="column"  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400">
              <div class="card ">
                <img src="assets/images/motor1.png" alt="">
                <p class=" mt-3 text-dark" >MOTORCYCLE</p>
              </div>
            </div>

            <div class="column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">
              <div class="card">
               <img src="assets/images/sedan.png" alt="">
               <p class=" mt-3">SEDAN</p>
              </div>
            </div>
            
            <div class="column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
              <div class="card">
               <img src="assets/images/suv.png" alt="">
               <p class=" mt-3" >SUV</p>
              </div>
            </div>
            
            <div class="column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
              <div class="card">
               <img src="assets/images/van.png" alt="">
               <p class=" mt-3 " >VAN</p>
              </div>
            </div>
          </div>
          </section>


             <!-- Vehicle end-->

                <!-- about -->

                <div id="about" style="margin-top:80px;"  class="about container text-center shadow p-5">
              <div class="row  mx-auto container mx-auto">
                      <div style="background-color:#FF6C22;" class="col p-5 shadow" data-aos="fade-right">
                      <h1 class="text-light">ABOUT US</h1>
                          <p class="text-light mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi explicabo ex iure similique necessitatibus porro tempora esse omnis 
                          incidunt nemo ad possimus quisquam tenetur impedit nam. Repellat optio, odio, neque aliquam assumenda nobis sint dolor in aperiam, quaerat voluptatem!  veritatis amet, obcaecati quibusdam non officia illo enim quod! Fugit, quam. Quam.</p>
                      </div>
      
                  </div>
                </div>
             
            <!-- about-end -->

            <!-- contact form -->
              <!-- Wrapper container -->
              <div id="contact" style="margin-top:80px;" class="container py-4 bg-light shadow" data-aos="fade-up">
                          <H1 class="text-center" style="color: #FF6C22; margin-top:40px;">CONTACT US</H1>
                    <!-- Bootstrap 5 starter form -->
                    <form id="contactForm" class="m-1 p-5">

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
            <script src="assets/js/main.js"></script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
           
            

            <script>
              $("#navbarNavDropdown a:not(.dropdown-toggle)").click(function() {
                $("#navbarNavDropdown").collapse("hide");
              });
            </script>
            <script>
              AOS.init();
            </script>
        
     
    </body>
</html>
