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
        <script src="assets/js/main.js"></script>
        
        <style>
         
           
        </style>
    </head>
    <body class="antialiased "> 
                      
                <!-- nav -->
      <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-light p-4 ">
      <div class="container">
        <a class="navbar-brand text-primary" href=""><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="">Home</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Vehicle
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" style="background-color:#FF6C22;">
                        @foreach($autos as $auto)
                          <li><a class="dropdown-item" href="/biddersSedan">{{$auto->auto_type}}</a></li>
                        @endforeach
                    </ul>
                    </li>
                </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">How to start</a>
            </li>
            <li class="logout nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:#FF6C22;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" style="background-color:#FF6C22;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item " href="#">
                                        {{ __('Message') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          </ul>
        </nav>
        <!-- For multi users -->
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                   
                    @endif
        <!-- For multi users end-->

        <section class="container text-center mt-5">
                <h1 class=" display-3" style="color:#FF6C22;"> <b>Bidders</b></h1>
                <p class="text-dark" >Hello <span class="" style="color:#FF6C22;"> <b>{{ Auth::user()->name }}</b>  </span> welcome to auctionear <br>click button bellow to place a bid</p>

                <center>
                 
          <div class="list container-md mt-5">
          <h1 class="text-center" style="color:#FF6C22;" >VEHICLE AVAILABLE</h1>
            <div class="row gy-3 mt-4">
              
              @foreach($autos as $auto)
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <img src="{{$auto->auto_image}}" class="img-fluid" />
                  <div class="col text-dark">
                  {{$auto->suggested_price}}
                  </div>
                  <div class="d-grid">
                    <a href="/auctionPage?type={{$auto->id}}" class="btn mt-2">{{$auto->auto_type}}</a>
                  </div>
                </div>
              @endforeach
      

            </div>
          </div>
          </center>
        </section>

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
        
     
    </body>
</html>