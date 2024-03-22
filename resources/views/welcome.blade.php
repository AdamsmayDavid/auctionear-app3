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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Styles -->

        <!-- carousel -->
        
        <style>
         
           
        </style>
    </head>
    <body class="bg-waves"> 
                      
                <!-- nav -->
      <nav id="NavBar" class="navbar fixed-top navbar-expand-lg navbar-light bg-warning shadow">
      <div class="container-md ">
        <a class="navbar-brand text-primary"  href=""> <img src="/assets/images/LOGO2.png" alt="logo"><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="#">
              <i class="fa fa-home" aria-hidden="true" style="font-size:15px"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#vehicle">
              <i class="fa fa-car" aria-hidden="true"  style="font-size:15px"></i> Vehicle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#start">
              <i class="fa fa-hourglass-start" aria-hidden="true" style="font-size:15px"></i> How to start</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#about">
              <i class="fa fa-info-circle" aria-hidden="true"  style="font-size:15px"></i> About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#contact">
              <i class="fa fa-address-book" aria-hidden="true" style="font-size:15px"></i> Contact Us</a>
            </li>
          </ul>
          
                    
                        <div style="margin-top:15px;"  id="btn-G" class="btn-reg ms-auto">
                            @if (Route::has('login'))
                                
                                    @auth
                                        <a  href="{{ route('home') }}" class="text-decoration-none text-warning">Dashboard</a>
                                    @else
                                        <p><a  style="" href="{{ route('login') }}" type="button" class="btn btn-log text-light btn-md rounded-1"> Login</a>
                                            
                                    @if (Route::has('register'))
                                                
                                        <a  style="" href="{{ route('register') }}" type="button" class="btn btn-log text-light btn-md m-1 rounded-1">Sign-up </a></p>

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
               <div style="margin-top:150px;" class="bg-cover cover-responsive">
                  <div class="intro d-flex container-fluid flex-direction-column flex-direction-md-row flex-wrap flex-wrap-md-nowrap">
                    <div id="introduction" class="container-fluid-md  w-md-50 order-md-2 overflow-hidden">
                      <div id="intro-img-holder" class="col-11 row justify-content-center m-0 p-0">
                        <img id="intro-img" class="img-fluid" src="assets/images/intro.jpg.png" alt="intro img"  data-aos="fade-left">
                      </div>

                    </div>
                    <div class="auctionearTittle container-md w-md-50 d-md-flex justify-content-center align-items-center flex-column">
                      <div class="col-md-10 offset-md-1 col-xl-8 offset-xl-0 double-gutter-md-left-padding "  data-aos="fade-right">
                          <h1 class="navbar-brand text-primary"  href=""><b>Auctio<span style="color:#FF6C22;">near </span></b></h1>
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
                <div style="margin-top:50px;" class="vision container text-center p-5 " >
                <!-- <img src="/assets/images/logo.png" alt="" class=""> -->
                <h1 class="fw-bolder " style="color:#FF6C22; font-size:5vh;" >WHY AUCTIONEAR</h1>
                <hr class="border-light col-5 m-auto"> 
                  <div class="row align-items-start text-start container mx-auto">
                      <div class="col bg-light p-5  m-3" data-aos="fade-right">
                        <h2 class="" style="color:#FF6C22;" >Flexibility <i class="fa fa-map-marker" aria-hidden="true"></i></h2>
                        <hr class="border-dark"> 
                          <small class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur?</small>
                      </div>
                      <div class="col bg-light p-5   m-3" data-aos="fade-up">
                        <h2 class="" style="color:#FF6C22;" >Secured <i class="fa fa-solid fa-shield"></i></h2>
                        <hr class="border-dark">
                          <small class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur?</small>
                      </div>
                      <div class="col bg-light p-5 m-3 " data-aos="fade-left">
                        <h2 class="" style="color:#FF6C22;">Easy to use <i class="fa fa-solid fa-eye"></i></h2>
                        <hr class="border-dark">
                          <small class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur?</small>
                      </div>
                  </div>
                </div>
            
            <!-- columns end-->


              <!-- start an auction -->

              <div id="start" class="start container text-center " >
                  <div class="row align-items-start text-start container">
                      <div class="col float-start " data-aos="fade-right">
                       <img src="/assets/images/motor1.png" alt="">
                      </div>
                      <div class="col float-end mt-5" data-aos="fade-up">
                        <h1 class="text-primary fs-1" >How to start <i class="fa fa-motorcycle" aria-hidden="true"></i></h1>
                        <hr class="border-dark">
                          <small class="dark fs-4 text-dark" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur?</small>
                      </div>
                  </div>
                </div>
              <!-- <div id="start" style=" z-index:;" class="start container">
                  <div class=" container mx-auto">
                          <div class="column float-start" data-aos="fade-right">
                              <img src="/assets/images/motor1.png" class="" alt="">
                          </div>
                          <div  class="column float-end text-start mt-5" data-aos="fade-right">
                                <h1 class="fw-bolder text-primary" style=" font-size:6vh">HOW TO  START</h1>
                                <small class="text-dark fw-normal" style="font-size:2vh">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Quod illum voluptate tempora consequatur dolore voluptatem
                                  magni assumenda minus nam, cumque corporis facilis, maiores saepe c
                                  ommodi veritatis placeat! Dolore, nam consequuntur? Lorem ipsum dolor</small>
                          </div>
                  </div>
              </div> -->

                 <!-- start an auction end -->


            
  <section id="vehicle" class="bg-image img-responsive vehicle container p-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <div class="pad-about row container">
              <h1 class="fw-bolder text-start " style=" font-size:5vh; !important; color:#FF6C22;">AVAILABLE VEHICLE <i class="fa fa-car" aria-hidden="true"></i></h1> <hr>
              <small style=" margin-bottom:50px" class="text-start text-dark">e a impedit aut explicabo molestiae expedita repellendus est. Harum perferendis qui minima modi quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sint quod est quas consequuntur, animi voluptas quisquam, pariatur ipsa facere aspernatur, magni neque amet necessitatibus officiis obcaecati nisi itaque quo?</small>
             
              <!-- <h6 class="text-center mb-5 text-dark" >Click to view every vehicle descriptions !</h6> -->
            <div class="column"  data-aos-easing="linear" data-aos-duration="400">
              <div class="card ">
                <img src="assets/images/nmax.png" alt="">
                <p class=" mt-3 text-dark" >MOTORCYCLE</p>
              </div>
            </div>

            <div class="column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">
              <div class="card">
               <img src="assets/images/vios.png" alt="">
               <p class=" mt-3">SEDAN</p>
              </div>
            </div>
            
            <div class="column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
              <div class="card">
               <img src="assets/images/fortuner.png" alt="">
               <p class=" mt-3" >SUV</p>
              </div>
            </div>
            
            <div class="column" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
              <div class="card">
               <img src="assets/images/hiace.png" alt="">
               <p class=" mt-3 " >VAN</p>
              </div>
            </div>
          </div>
          </section>
      

           

             <!-- Vehicle end-->

             
                    <!-- about -->

                    <div id="about"  class="about container text-center " >
                  <div class="row align-items-start text-start container">
                      <div class="col mt-5 float-start" data-aos="fade-up">
                        <h1 class="text-primary fs-1" >Know About Us <i class="fa fa-info-circle" aria-hidden="true"></i></h1>
                        <hr class="border-dark">
                          <small class="dark fs-4 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illum voluptate tempora consequatur dolore voluptatem magni assumenda minus nam, cumque corporis facilis, maiores saepe commodi veritatis placeat! Dolore, nam consequuntur?</small>
                      </div>
                      <div class="col float-end z-n1" data-aos="fade-right">
                       <img src="/assets/images/about.png" alt="">
                      </div>
                  </div>
                </div>
             
            <!-- about-end -->



            <!-- contact form -->
              <!-- Wrapper container -->
              <div id="contact" style="margin-top:80px;" class="container-fluid py-4">  
                    <!-- Bootstrap 5 starter form -->
                    <div class="container form p-5 ">
    
          
                      <H1 class="text-center" style="color: #FF6C22;">Contact Us <i class="fa fa-address-book" aria-hidden="true"></i></H1>
                      <center>
                      <small class="text-center text-dark">"Hello, if you're experiencing any issues with the system <br>
                         or if you're interested in selling your vehicle, please don't hesitate to contact us. <br>
                          We're here to help and would be happy to assist you."</small>
                          </center>
                      
                    <!-- FORM -->
                    <form class="" action="https://api.web3forms.com/submit" method="POST">
                          <div class="row gy-4 gy-xl-5 p-xl-5 justify-content-center">
                            <input type="hidden" name="access_key" value="8bdd62a2-c4f5-4441-88b3-d332b3f97342">
                            <div class="col-12 col-md-7">
                              <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                              <input id="name"  type="text" class="form-control" name="name" value="" required>
                            </div>
                            <div class="col-12 col-md-7">
                              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                              <div class="input-group">
                                <span class="input-group-text">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                  </svg>
                                </span>
                                <input  type="email" class="form-control" id="email" name="email" value="" required>
                              </div>
                            </div>
                            <div class="col-12 col-md-7">
                            <div class="col-12">
                              <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                              <textarea id="body" class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                              <div class="d-grid mt-3">
                                <button id="btnsubmit" style="background-color:#FF6C22;" class="btn btn-lg text-light" type="submit" onclick="sendEmail()" value="Send an Email">Send Message</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>

                  </div>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- <script src="assets/js/jquery.min.js"></script> -->
            <script src="assets/js/main.js"></script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
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
