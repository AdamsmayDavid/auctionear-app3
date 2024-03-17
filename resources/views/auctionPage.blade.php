    
@extends('layouts.app')

@section('content')
        <title>Auctionear</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Styles -->

        <!-- carousel -->
        <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> -->
        <!-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
        
        <style>
            #btn_bid{
                background-color:#FF6C22;
                border:none;
                
            }
            #btn_bid:hover{
                background-color:#FF6C40;

            }
         
           
        </style>
      
      <div class="container mt-5" style="margin-top:100px !important">
        
            @if(auth()->user()->type == 'user')
            <nav class=" container">
                    <div class="container">
                    <h1 class="text-center" style="color:#FF6C22;" >
                        <span style="text-transform:uppercase;">
                            {{$auto_type->auto_type}}
                        </span>
                    </h1>
                        <form class="d-flex" role="search" type="get" action="">
                        <input class="form-control m-1" type="search" placeholder="You can do a search for the desired vehicle." style="" aria-label="Search">
                        <button id="btn_sel" class="btn btn-outline-primary btn-md m-1" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            @endif

            @if(auth()->user()->type == 'seller')
                    <h1 class="text-center text-primary">
                        <span style="text-transform:uppercase;">
                            {{$auto_type->auto_type}}
                        </span>
                    </h1>
            @endif

            @if(auth()->user()->type == 'seller')
                <!-- creation btn for seller -->
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a id="btn_sel" class="btn btn-outline-primary btn-lg" href="/createAuction">Create Auction</a>
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button id="btn_sel" class="btn btn-outline-primary btn-md" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
                <!-- creation btn for seller end-->
            @endif

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    
            @foreach($auctions as $auction)
                <div class="col">
                    <div class="card">
                    <img src="images/auctions/{{$auction->auctionImage}}" class="card-img-top" alt="{{$auction->auctionImage}}">
                    <div class="card-body">
                        <h5 class="card-title">Auction Id: {{$auction->auction_id}}</h5>
                        <p class="card-text">Description: {{$auction->description}} </p>
                        <p class="card-text">Recent Bid: </p>

                        @if(auth()->user()->type == 'user')
                            <a id="btn_bid" href="/biddingPage?auction_id={{$auction->auction_id}}" class="btn btn-primary">Bid</a>
                        @endif

                        @if(auth()->user()->type == 'seller')
                            <a id="btn_sel" href="/biddingPage?auction_id={{$auction->auction_id}}" class="btn btn-primary">View</a>
                        @endif

                    </div>
                    </div>
                </div>
            @endforeach

      
     <!-- script file -->
     <!-- <script src="assets/js/jquery.min.js"></script> -->
            <!-- <script src="assets/js/owlcarousel/owl.carousel.min.js"></script> -->
            <script src="assets/js/main.js"></script>

    
@endsection

