<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
    <body> 
                      
                <!-- nav -->
                <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-light p-4 ">
      <div class="container">
        <a class="navbar-brand text-primary" href="/seller/home"><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-0 active" aria-current="page" href="/seller/home">Home</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Vehicle
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark bg-primary">
                        <li><a class="dropdown-item" href="/sellerMotorcycle">Motorcycle</a></li>
                        <li><a class="dropdown-item" href="/sellerSedan">Sedan</a></li>
                        <li><a class="dropdown-item" href="/sellerSuv">Suv</a></li>
                        <li><a class="dropdown-item" href="/sellerVan">Ban</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link mx-0" href="#">How to sell</a>
            </li>
            <li class="logout nav-item dropdown mt-1">
                                <a id="navbarDropdown" class="btn btn-primary btn-sm dropdown-toggle text-light"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end  bg-primary" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-light2" href="#">
                                        {{ __('Message') }}
                                    </a>
                                
                                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          </ul>
        </nav>
        <div class=" container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-light bg-primary">{{ __('Create Auction') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <!-- VEHICLE NAME -->
                                            <div class="col-md-12">
                                                <div class="form-floating row mb-2">
                                                    <input class="form-control border-primary" type ="text" placeholder="Leave a comment here" id="vehicleName">
                                                     <label for="vehicleName">Vehicle Name</label>
                                                 </div>
                                            </div>
                                             <!-- VEHICLE NAME END -->
                                        </div>
                                        <div class="row mb-3">
                                            <!-- VEHICLE PICTURES UPLOAD -->
                                            <div class="col-md-12">
                                                <div class="form-floating row mb-2">
                                                    <input class="form-control border-primary" type="file" placeholder="Leave a comment here" id="vehicleName">
                                                     <label for="vehicleName">Vehicle Pictures</label>
                                                 </div>
                                            </div>
                                             <!-- VEHICLE PICTURES UPLOAD END -->
                                        </div>
                                        
                                         <!-- VEHICLE DESCRIPTIONS -->
                                        <div class="form-floating row mb-4 col-md-12 m-auto">
                                            <textarea class="form-control border-primary" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Vehicle Descriptions</label>
                                        </div>
                                             <!-- VEHICLE DESCRIPTIONS END -->

                                        <div class="row mb-3">
                                               <!-- VEHICLE DATE -->
                                            <div class="col-md-6">                                           
                                                <div class="form-floating row mb-2">
                                                    <input class="form-control border-primary" type="date" placeholder="Leave a comment here" id="Date">
                                                     <label for="Date">Date</label>
                                                 </div>
                                            </div>
                                                   <!-- VEHICLE DATE END -->

                                                <!-- VEHICLE TIME -->
                                            <div class="col-md-6">                                           
                                                <div class="form-floating row mb-2">
                                                    <input class="form-control border-primary" type="time" placeholder="Leave a comment here" id="Time">
                                                     <label for="Time">Time</label>
                                                 </div>
                                            </div>
                                             <!-- VEHICLE TIME END-->
                                        </div>
                                        <div class="row">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-primary rounded-0"> <h2>₱</h2></span>
                                            </div>
                                            <div class="form-floating row mb-2">
                                            <input type="number" class="form-control border-primary" placeholder="Leave a comment here" id="Time">
                                            <label for="Time">Starting Price</label>
                                            </div>
                                        </div>

                                       

                                        <div class="post row mb-0">
                                            <div class="col-md-14 offset-md-">
                                                <button type="submit" class="btn btn-primary col-md-12">
                                                    {{ __('Post') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
            <!-- script file -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
        
     
    </body>
</html>
