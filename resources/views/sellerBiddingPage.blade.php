    
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="Bidport" content="width=device-width, initial-scale=1">

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
            /* .btn{
                background-color:#FF6C22;
                
            }
            .btn:hover{
                background-color:#FF6C40;

            } */
         
           
        </style>
    </head>
    <body class="antialiased "> 
                      
                <!-- nav -->
                <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-warning p-4 ">
      <div class="container">
        <a class="navbar-brand text-primary" href="/seller/home "><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
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
                                    <a class="dropdown-item text-light " href="#">
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
        <H1 class="text-center text-primary">AUCTION PAGE</H1>
        <div class="container mt-5">
    <div id="biddingCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/red.jpg" class="d-block w-100" alt="Bidding Item Image 1">
            </div>
            <div class="carousel-item">
                <img src="assets/images/red.jpg" class="d-block w-100" alt="Bidding Item Image 2">
            </div>
            <div class="carousel-item">
                <img src="assets/images/red.jpg" class="d-block w-100" alt="Bidding Item Image 3">
            </div>
            <div class="carousel-item">
                <img src="assets/images/red.jpg" class="d-block w-100" alt="Bidding Item Image 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#biddingCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#biddingCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">ITEM NAME</h5>
            <p class="card-text">Description of the bidding item goes here. You can provide details about the item and any other relevant information.</p>
        </div>
        <ul class="list-group list-group-flush">
            <!-- <li class="list-group-item">
                <div class="input-group">
                    <span class="input-group-text">Your Bid:</span>
                    <input type="text" class="form-control" placeholder="Enter your bid amount">
                    <button class="btn btn-primary">Place Bid</button>
                </div>
            </li> -->
            <li class="list-group-item">
                <p class="mb-0">Current Highest Bid: $100</p>
            </li>
            <li class="list-group-item">
                <p class="mb-0">Bidding Ends: January 31, 2024</p>
            </li>
            <li class="list-group-item">
                <p class="mb-0">Bidders:</p>
                <ul>
                    <li>adams- $150</li>
                    <li>adams - $120</li>
                    <li>adams - $100</li>
                </ul>
            </li>
        </ul>
    </div>
</div>

     <!-- script file -->
     <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>


    </body>
    </html>

