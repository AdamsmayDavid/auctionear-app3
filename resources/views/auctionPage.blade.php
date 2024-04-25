    
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
      
      <div class="container mt-5 bg-light p-2" style="margin-top:100px !important">
      <section class="bg-light shadow p-3 rounded">

            @if(auth()->user()->type == 'user')
            <nav class=" container">
                    <div class="container">
                    <h1 class="text-center p-2" style="color:#FF6C22;" >
                        <span style="text-transform:uppercase;">
                            {{$auto_type->auto_type}}
                            <hr class="col-5 m-auto ">
                        </span>
                    </h1>
                       
                    </div>
                </nav>
            @endif

            @if(auth()->user()->type == 'seller')
                    <h1 class="text-center text-primary p-2">
                        <span style="text-transform:uppercase;">
                            {{$auto_type->auto_type}}
                            <hr class="col-5 m-auto ">
                        </span>
                    </h1>
            @endif

            @if(auth()->user()->type == 'seller')
                <!-- creation btn for seller -->
                <nav class="container p-3 bg-primary rounded">
                    <div class="container-fluid">
                        <a id="btn_sel" class="btn btn-outline-light btn-lg" href="/createAuction">Create Auction</a>
                        <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button id="btn_sel" class="btn btn-outline-primary btn-md" type="submit">Search</button>
                        </form> -->
                    </div>
                </nav>
                <!-- creation btn for seller end-->
            @endif

            <section class=" p-3 rounded">
            <h5 CLASS="text-dark p-1">VEHICLE LIST</h5>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    
            <!-- @if(!empty($auctions))
                @foreach($auctions as $auction)
                <div class="col">
                    <div class="card">
                    <img src="images/auctions/{{$auction->auctionImage1}}" class="card-img-top" alt="{{$auction->auctionImage}}">
                    <div class="card-body">
                        <h5 class="card-title">Auction Id: {{$auction->auction_id}}</h5>
                        <p class="card-text fs-3">Description: {{$auction->description}} </p>
                        <label for="" class="fs-3" > <b><span id="bidding-pause{{$auction->auction_id}}"></span></b></label>
                        <p class="md-title text-danger" style="font-size:4vh;" id="biddingTime{{$auction->auction_id}}"></p>

                        @if(auth()->user()->type == 'user')
                            <a id="btn_bid{{$auction->auction_id}}" href="/biddingPage?auction_id={{$auction->auction_id}}" class="btn btn-lg col-12 btn-primary"></a>
                        @endif

                        @if(auth()->user()->type == 'seller')
                            <a id="btn_sel{{$auction->auction_id}}" href="/biddingPage?auction_id={{$auction->auction_id}}" class="btn btn-primary">View</a>
                        @endif

                    </div>
                    </div>
                </div>
                @endforeach
            @endif -->

            @if(!empty($auctions))
                @foreach($auctions as $auction)
                    <div class="col">
                        <div class="card">
                            <img src="images/auctions/{{$auction->auctionImage1}}" class="card-img-top" alt="{{$auction->auctionImage}}">
                            <div class="card-body">
                                <h3 class="card-title"><b> Auction Id:</b> 000{{$auction->auction_id}}</h3>
                                <p class="card-text fs-3"> <b>Description:</b> {{$auction->description}} </p>
                                <label for="" class="fs-3" > <b><span id="bidding-pause{{$auction->auction_id}}"></span></b></label>
                                <p class="md-title text-danger" style="font-size:4vh;" id="biddingTime{{$auction->auction_id}}"></p>

                                @if(auth()->user()->type == 'user')
                                    <a id="btn_bid{{$auction->auction_id}}" href="/biddingPage?auction_id={{$auction->auction_id}}" class="btn btn-lg col-12 btn-primary">Bid</a>
                                @endif

                                @if(auth()->user()->type == 'seller')
                                    <a id="btn_sel{{$auction->auction_id}}" href="/biddingPage?auction_id={{$auction->auction_id}}" class="btn btn-primary">View</a>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


            </section>
            </section>

            
                
               
     <!-- script file -->
     <!-- <script src="assets/js/jquery.min.js"></script> -->
            <!-- <script src="assets/js/owlcarousel/owl.carousel.min.js"></script> -->
            <script src="assets/js/main.js"></script>

            <!-- JavaScript for the countdown timer -->
<!-- JavaScript for the countdown timer -->
<script>
    @if(!empty($auctions))
        @foreach($auctions as $auction)
        // Countdown logic for auction with id {{$auction->auction_id}}
        function updateCountdown{{$auction->auction_id}}(endDate) {
            fetch('https://worldtimeapi.org/api/ip')
            .then(response => response.json())
            .then(data => {
                const serverTime = new Date(data.utc_datetime);
                const taipeiTime = new Date(serverTime.toLocaleString('en-US', { timeZone: 'Asia/Taipei' }));
                        
                let distance = endDate - taipeiTime;

                let status = '{{ $auction->status}}';

                if (distance <= 0 || status === "closed") {
                    clearInterval(countDown{{$auction->auction_id}});
                    document.getElementById('biddingTime{{$auction->auction_id}}').innerHTML = "ITEM SOLD!";
                    document.getElementById('bidding-pause{{$auction->auction_id}}').innerHTML = "";
                    if (document.getElementById('btn_bid{{$auction->auction_id}}')) {
                        document.getElementById('btn_bid{{$auction->auction_id}}').innerHTML = "View";
                    }
                } else {
                    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById('biddingTime{{$auction->auction_id}}').innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
                    document.getElementById('bidding-pause{{$auction->auction_id}}').innerHTML = "Bidding Will end in:";
                    document.getElementById('btn_bid{{$auction->auction_id}}').innerHTML = "Bid";
                }
            })
            .catch(error => {
                console.error('Error fetching current time:', error);
            });
        }

        let rawDate{{$auction->auction_id}} = '{{ $auction->end_time }}';
        let endDate{{$auction->auction_id}} = new Date(rawDate{{$auction->auction_id}});
        let countDown{{$auction->auction_id}} = setInterval(function() {
            updateCountdown{{$auction->auction_id}}(endDate{{$auction->auction_id}});
        }, 1000);

        updateCountdown{{$auction->auction_id}}(endDate{{$auction->auction_id}});
        @endforeach
    @endif
</script>




            <!-- JavaScript for the countdown timer -->
<!-- <script>
    @if(!empty($auctions))
        @foreach($auctions as $auction)
        // Countdown logic for auction with id {{$auction->auction_id}}
        function updateCountdown{{$auction->auction_id}}(endDate) {
            fetch('https://worldtimeapi.org/api/ip')
            .then(response => response.json())
            .then(data => {
                const serverTime = new Date(data.utc_datetime);
                const taipeiTime = new Date(serverTime.toLocaleString('en-US', { timeZone: 'Asia/Taipei' }));
                        
                let distance = endDate - taipeiTime;

                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('biddingTime{{$auction->auction_id}}').innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
                document.getElementById('bidding-pause{{$auction->auction_id}}').innerHTML = "Bidding Will end in:";
                document.getElementById('btn_bid{{$auction->auction_id}}').innerHTML = "Bid";

                if (distance <= 0) {
                    clearInterval(countDown{{$auction->auction_id}});
                    document.getElementById('biddingTime{{$auction->auction_id}}').innerHTML = "ITEM SOLD!";
                    document.getElementById('bidding-pause{{$auction->auction_id}}').innerHTML = "";
                    document.getElementById('btn_bid{{$auction->auction_id}}').innerHTML = "View";
                }
            })
            .catch(error => {
                console.error('Error fetching current time:', error);
            });
        }

        let rawDate{{$auction->auction_id}} = '{{ $auction->end_time }}';
        let endDate{{$auction->auction_id}} = new Date(rawDate{{$auction->auction_id}});
        let countDown{{$auction->auction_id}} = setInterval(function() {
            updateCountdown{{$auction->auction_id}}(endDate{{$auction->auction_id}});
        }, 1000);

        updateCountdown{{$auction->auction_id}}(endDate{{$auction->auction_id}});
        @endforeach
    @endif
</script> -->


<!-- 
            <script>
            @if(!empty($auctions))
                @foreach($auctions as $auction)
                    // kunin time sa db
                    let rawDate = '{{ $auction->end_time }}';

                    // convert end date string to JavaScript Date object
                    let endDate = new Date(rawDate);

                    // Update countdown timer
                    function updateCountdown() {
                        fetch('https://worldtimeapi.org/api/ip')
                        .then(response => response.json())
                        .then(data => {
                            const serverTime = new Date(data.utc_datetime);
                            // Explicitly set the timezone to 'Asia/Taipei' (Taipei Standard Time)
                            const taipeiTime = new Date(serverTime.toLocaleString('en-US', { timeZone: 'Asia/Taipei' }));
                            
                            let distance = endDate - taipeiTime;

                            // Calculate time components
                            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Update countdown display
                            document.getElementById("biddingTime{{$auction->auction_id}}").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
                            document.getElementById("bidding-pause{{$auction->auction_id}}").innerHTML = "Bidding Will end in:";
                            document.getElementById("btn_bid{{$auction->auction_id}}").innerHTML = "Bid";

                            // Check if auction is completed
                            if (distance <= 0) {
                            clearInterval(countDown);
                            document.getElementById("biddingTime{{$auction->auction_id}}").innerHTML = "ITEM SOLD!";
                            document.getElementById("bidding-pause{{$auction->auction_id}}").innerHTML = "";
                            document.getElementById("btn_bid{{$auction->auction_id}}").innerHTML = "View";
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching current time:', error);
                        });
                    }

                    // Running the countdown every second
                    let countDown = setInterval(updateCountdown, 1000);

                    // Initial call to update countdown
                    updateCountdown();

                @endforeach
            @endif
            </script> -->


    
@endsection

