@extends('layouts.app')
@section('content')
                      

        <title>Bidding Page</title>
        <!-- @vite('resources/js/app.js') -->
       <!-- Fonts -->
        <!-- @vite('resources/js/app.js') -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/scroll.css">
        <!-- Styles -->

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/tailwindcss-colors.css">
        <link rel="stylesheet" href="assets/css/chatStyling.css">
        <title>Chat</title>
    
 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        

        <!-- Fonts -->
@if(!empty($auctionData))
    @foreach($auctionData as $auction)
    
    @endforeach
@endif


        @if(auth()->user()->type == 'user')
            <h1 class="text-center" style="color:#FF6C22; margin-top:100px !important">PLACE A BID</h1>
            <hr class="border-secondary col-3 m-auto">
        @endif

        @if(auth()->user()->type == 'seller')
            <h1 class=" text-center text-primary" style="margin-top:100px;">VIEW AUCTION</h1>
            <hr class="border-secondary col-3 m-auto">
        @endif

    <section class=" container" >
        <div class="container mt-5">
            <div id="biddingCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/auctions/{{ $auction->auctionImage }}" class="d-block w-100" alt="{{ $auction->auctionImage }}">
                    </div>
                    <div class="carousel-item">
                        <img src="images/auctions/{{ $auction->auctionImage }}" class="d-block w-100" alt="{{ $auction->auctionImage }}">
                    </div>
                    <div class="carousel-item">
                        <img src="images/auctions/{{ $auction->auctionImage }}" class="d-block w-100" alt="{{ $auction->auctionImage }}">
                    </div>
                    <div class="carousel-item">
                        <img src="images/auctions/{{ $auction->auctionImage }}" class="d-block w-100" alt="{{ $auction->auctionImage }}">
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
                    <h5 class="card-title">Auction ID : {{ $auction->auction_id }}</h5>
                    <p class="card-text">Vehicle Description : {{ $auction->description }}</p>
                </div>
                <ul class="list-group list-group-flush">


                @if($auction->status == 'closed')
                    <div class="alert alert-primary w-100 h-100 text-center fs-3">This auction is completed!</div>
                @else
                        @if(auth()->user()->type == 'user')
                            <li class="list-group-item">
                                <div class="input-group">
                                
                                    <!-- <input id="bid_price" type="number" class="form-control" placeholder="Enter your bid amount" required> -->
                                <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-md btn-primary col-12 rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" required>
                                    Place bid
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Please review your bid before you confirm</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="inputValue" class="form-label">Enter Value:</label>
                                            <input type="number" class="form-control" id="bid_price" placeholder="₱">
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                            <button id="place_bid" type="button" class="btn btn-primary" data-bs-dismiss="modal" >Confirm</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            </li>
                        @endif
                        @if(auth()->user()->type == 'seller')
                         
                        <div class="p-3">
                                <button type="button" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    End Auction
                                </button>
                                </div>
                        @endif
                @endif  <!--  $farmer->id -->

                

                    
                

                    <!-- @if(auth()->user()->type == 'seller')`
                        <h1 class=" display-3 text-primary"> <b>Seller</b></h1>
                        <p class="text-dark" >Hello <span class="text-primary"> <b>{{ Auth::user()->name }}</b>  </span> welcome to auctionear <br>click button bellow to create a auction</p>
                    @endif -->

                    
                    <li class="list-group-item">
                    
                    </li>
                   
                            <li class="list-group-item">
                                <p class="mb-0">Starting price : ₱{{ $auction->starting_price }}</p>
                            </li>
                     
                   
                    
                            <div class="row cta-row d-flex justify-content-center mb-2 mt-2 mt-lg-5">
                                <div id="validation-errors1"  role="alert">                    
                                </div>       
                            </div>

                            <p class="title text-start">Top Bidders</p>
                            <div class="row bids-row bg-light-subtle mb-4">
                            <div class="bids-table mt-2">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">Nickname</th>
                                    <th scope="col">Bid Price</th>
                                    <!-- <th scope="col">Date</th> -->
                                    </tr>
                                </thead>
                                <tbody id="tbody1">
                                
                                @if(!empty($bids))            
                                    @foreach($bids as $bid) 
                                    <tr>
                                        <td>{{ $bid->name }}</td>
                                        <td>₱{{ $bid->bid_amount }}</td>
                                        <!-- <td>{{ $bid->on_time }}</td> -->
                                    </tr>                                 
                                    @endforeach
                                @endif

                                </tbody>
                                </table>
                            </div>
                            </div>

                        </ul>
                    </li>

                    </section>     
                
                    @if(auth()->user()->type == 'seller')

                            @if($auction->status == 'closed')
                                <h5 class="text-center">Auction Ended</h5>
                            @else
                

                                <!-- Modal -->
                                <div style="margin-top:100px !important;" class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">End Auction</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to end the Auction?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <a
                                            type="button"
                                            class="btn btn-primary"
                                            
                                            href="{{ url('manual_close')}}?auction_id={{ $auction->auction_id }}"
                                        >
                                            Confirm
                                        </a>
                                        <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal"  onclick = "clearText()">Confirm</button> -->
                                    </div>
                                    </div>
                                </div>
                                </div>
                            @endif  <!--  $farmer->id -->


                    @endif
                </ul>
       
       
        
                <!-- 
                    @if(!empty($bids))            
                    @foreach($bids as $bid) 
                    <tr>
                        <td class="text-center">
                          <img
                            src="/images/profiles/{{ $bid->profile_img }}"
                            alt=""
                            class="rounded-circle object-fit-cover"
                            id="table-img"
                          />
                        </td>
                        <td>{{ $bid->name }}</td>
                        <td>₱{{ $bid->bid_amount }} /kg</td>
                        <td>{{ $bid->on_time }}</td>
                    </tr>
                    @endforeach
                  @endif
                   -->


<!-- 
        @if(auth()->user()->type == 'user')           
            <div class="card-body">
                <button class="btn btn-danger">Cancel Bid</button>
            </div>
        @endif

            <div class="card-body">
                <button id="create" class="btn btn-danger">Create Element</button>
            </div>
        

    </div>
</div> -->


            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@if(!empty($auctionData))
    @foreach($auctionData as $auction)
    
    @endforeach
@endif

        
      
                        
    


            
    <script>
      $(document).ready(function() {

        //para sa Web toh par
           
             $('#place_bid').click(function() {
                var bid_price = $('#bid_price').val();
                if (bid_price.trim() !== '') {
                    // AJAX request to send the message to the server
                    $.ajax({
                        method: 'POST',
                        url: '/send_bid', // Replace with your route
                        data: 
                        { 
                          _token: '{{ csrf_token() }}',
                          message: bid_price,
                          channel: '{{ $auction->auction_id }}',
                          bidder: "{{ Auth::user()['name'] }}",
                        },
                        success: function(response) {
                            // Handle success if needed
                            console.log('Message Response: ', response);

                            if (response == 0) {
                                // Log or display validation errors


                                const errors = response;

                                // Clear any existing error messages
                                const validationErrorsDiv = document.getElementById('validation-errors1');
                                validationErrorsDiv.innerHTML = '';
                                

                                // Create and append error messages
                                for (const field in errors) {
                                    if (errors.hasOwnProperty(field)) {
                                        //const errorMessages = errors[field].join('<br>'); or 
                                        const errorMessages = errors.join('<br>'); // Combine multiple error messages for the field
                                        const errorMessageElement = document.createElement('div');
                                        errorMessageElement.classList.add("new");
                                        errorMessageElement.innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                            <p class="fs-3 fw-bold text-center">Please Provide Higher Bid</p>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                        </div>`;
                                        validationErrorsDiv.appendChild(errorMessageElement);
                                    }
                                }

                                

                            } else if(response == 1) {
                                const errors = response;

                                // Clear any existing error messages
                                const validationErrorsDiv = document.getElementById('validation-errors1');
                                validationErrorsDiv.innerHTML = '';


                                // Create and append error messages
                                for (const field in errors) {
                                    if (errors.hasOwnProperty(field)) {
                                        //const errorMessages = errors[field].join('<br>'); or 
                                        const errorMessages = errors.join('<br>'); // Combine multiple error messages for the field
                                        const errorMessageElement = document.createElement('div');
                                        errorMessageElement.classList.add("new");
                                        errorMessageElement.innerHTML = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                            <p class="fs-3 fw-bold text-center">This Auction is ended, kindly refresh your browser.</p>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                        </div>`;
                                        validationErrorsDiv.appendChild(errorMessageElement);
                                    }
                                }
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle error if needed
                            console.log('Error sending message: ', error);
                        }
                    });
                }
            });


  });

   ///Websoket Listening

   setTimeout(() => {
        //window.Echo.channel for public
        //window.Echo.private for private
        window.Echo.channel('myPrivateChannel.user.{{ $auction->auction_id }}')
        .listen('.private_msg', (data) => {
            
            
        console.log(data.bid_price);

        // Update UI with received message
        let bid_price = data.bid_price;
        let bidder_id = data.bidder;

            let row = document.createElement("tr");

            let name = document.createElement("td");
            name.innerText = `${bidder_id}`;
            row.appendChild(name);

            let price = document.createElement("td");
            price.innerText = `₱ ${bid_price}`;
            row.appendChild(price);

            //const d = new Date();
            // let date = document.createElement("td");
            // date.innerText = `${on_time}`;
            // row.appendChild(date);

            //tbody1.append(row);
            //tbody2.append(row);
            $("tbody").prepend(row);

        })
    }, 200)
    

//   ///Websoket Listening

//     setTimeout(() => {
//         //window.Echo.channel for public
//         //window.Echo.private for private
//         window.Echo.channel('myPrivateChannel.user.{{ $auction->auction_id }}')
//         .listen('.private_msg', (data) => {

//             console.log(data.bid_price);

//         // Update UI with received message
//         let bid_price = data.bid_price;
//         let bidder_id = data.bidder;
//         // let profile_img = data.profile_img;
//         // let on_time = data.bid_on;

//         let list = document.createElement("li");
//         list.innerText = `${bidder_id}- ₱` + bid_price;

//         // row.appendChild(price);

//         document.getElementById("bids_here").appendChild(list);

//         })
//     }, 200)

    // setTimeout(() => {
    //     window.Echo.private('myPrivateChannel.user.{{Auth::id()}}')
    //     .listen('.private_msg', (e) => {
    //         console.log(e);
    //     })
    // }, 200)


    /* for public channel
    setTimeout(() => {
        window.Echo.channel('testing')
        .listen('.MyWebSocket', (e) => {
            console.log(e);
        })
    }, 200)
    */
</script>


<!-- Testing create element 
<script>
      $(document).ready(function() {

        //para sa Web toh par
           
             $('#create').click(function() {
                var bid_price = $('#bid_price').val();
                
                let list = document.createElement("li");
                list.innerText = bid_price;

                // row.appendChild(price);

                document.getElementById("bids_here").appendChild(list);
                
            });


  });
</script>

-->


@endsection
