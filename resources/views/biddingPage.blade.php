@extends('layouts.app')

@section('content')
                      

        <title>Bidding Page</title>
        @vite('resources/js/app.js')
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Styles -->

        <!-- carousel -->
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        <script src="assets/js/main.js"></script>

        @if(auth()->user()->type == 'user')
            <h1 class="text-center" style="color:#FF6C22;">AUCTION PAGE</h1>
        @endif

        @if(auth()->user()->type == 'seller')
            <h1 class=" text-center text-primary">AUCTION PAGE</h1>
        @endif
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

            @if(auth()->user()->type == 'user')
                <li class="list-group-item">
                    <div class="input-group">
                        <span class="input-group-text">Your Bid:</span>
                        <input id="bid_price" type="number" class="form-control" placeholder="Enter your bid amount" required>
                       <!-- Button trigger modal -->
                        <button type="button" class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm your Bid</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               Confirm your bid
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                <button id="place_bid" type="button" class="btn btn-primary" data-bs-dismiss="modal"  onclick = "clearText()">Save changes</button>
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

@if(!empty($auctionData))
    @foreach($auctionData as $auction)
    
    @endforeach
@endif

        
      
                        
     <!-- script file -->
     <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@if(!empty($auctionData))            
    @foreach($auctionData as $auction) 
            
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

                            if (response == 'failed') {
                                // Log or display validation errors


                                const errors = response;

                                // Clear any existing error messages
                                const validationErrorsDiv = document.getElementById('validation-errors2');
                                validationErrorsDiv.innerHTML = '';
                                

                                // Create and append error messages
                                for (const field in errors) {
                                    if (errors.hasOwnProperty(field)) {
                                        //const errorMessages = errors[field].join('<br>'); or 
                                        const errorMessages = errors.join('<br>'); // Combine multiple error messages for the field
                                        const errorMessageElement = document.createElement('div');
                                        errorMessageElement.classList.add("new");
                                        errorMessageElement.innerHTML = `<div class="alert alert-danger"><h2>Please Provide Higher Bid</2></div>`;
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
