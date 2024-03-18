@extends('layouts.app')
@section('content')
                      

        <title>Bidding Page</title>
        <!-- @vite('resources/js/app.js') -->
        

        <!-- Fonts -->
@if(!empty($auctionData))
    @foreach($auctionData as $auction)
    
    @endforeach
@endif


        @if(auth()->user()->type == 'user')
            <h1 class="text-center" style="color:#FF6C22;">PLACE A BID</h1>
            <hr class="border-secondary col-3 m-auto">
        @endif

        @if(auth()->user()->type == 'seller')
            <h1 class=" text-center text-primary mt-5">VIEW AUCTION</h1>
            <hr class="border-secondary col-3 m-auto">
        @endif
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
            <h5 class="card-title">{{ $auction->auction_id }}</h5>
            <p class="card-text">{{ $auction->description }}</p>
        </div>
        <ul class="list-group list-group-flush">

            @if(auth()->user()->type == 'user')
                <li class="list-group-item">
                    <div class="input-group">
                        <span class="input-group-text">Your Bid:</span>
                        <input id="bid_price" type="number" class="form-control" placeholder="Enter your bid amount" required>
                       <!-- Button trigger modal -->
                        <button type="button" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                              <p>Post taya keni itang inimput nang bid</p>
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

            
          

            <!-- @if(auth()->user()->type == 'seller')`
                <h1 class=" display-3 text-primary"> <b>Seller</b></h1>
                <p class="text-dark" >Hello <span class="text-primary"> <b>{{ Auth::user()->name }}</b>  </span> welcome to auctionear <br>click button bellow to create a auction</p>
            @endif -->

            
            
            <li class="list-group-item">
               
            </li>
            <li class="list-group-item">
                <p class="mb-0">Bidding Ends: January 31, 2024</p>
            </li>
            
            <div class="row cta-row d-flex justify-content-center mb-2 mt-2 mt-lg-5">
                <div id="validation-errors1"  role="alert">                    
                </div>       
            </div>
            <li class="list-group-item">
                <p class="mb-0">Bidders:</p>
                <ul id="bids_here">
                    @if(!empty($bids))            
                    @foreach($bids as $bid) 
                        <li>{{ $bid->name }}- ${{ $bid->bid_amount }}</li>
                    @endforeach
                  @endif
                </ul>
            </li>
            @if(auth()->user()->type == 'seller')
            <div class="p-3 m-auto">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                End Auction
            </button>
            </div>
            


            <!-- Modal -->
            <div style="margin-top:100px !important;" class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm end auction</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"  onclick = "clearText()">Confirm</button>
                </div>
                </div>
            </div>
            </div>
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

                                

                            } else {
                                // Handle other errors
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
</script>


<script>
    setTimeout(() => {
        //window.Echo.channel for public
        //window.Echo.private for private
        window.Echo.channel('myPrivateChannel.user.{{ $auction->auction_id }}')
        .listen('.private_msg', (data) => {
            console.log(data.bid_price);

        // Update UI with received message
        let bid_price = data.bid_price;
        let bidder_id = data.bidder;
        // let profile_img = data.profile_img;
        // let on_time = data.bid_on;

        let list = document.createElement("li");
        list.innerText = `${bidder_id} - ` + bid_price;

        // row.appendChild(price);

        document.getElementById("bids_here").appendChild(list);

        })
    }, 200)

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
