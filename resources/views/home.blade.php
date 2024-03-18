@extends('layouts.app')

@section('content')
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
        <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> -->
        <!-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
        <script src="assets/js/main.js"></script>
        
 

        <!-- For multi users -->
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                   
                    @endif
        <!-- For multi users end-->

        <section class="container text-center mt-5">

                @if(auth()->user()->type == 'user')
                  <h1 class=" display-3" style="color:#FF6C22; margin-top:100px !important;"> <b>Bidders</b></h1>
                  <p class="text-dark" >Hello <span class="" style="color:#FF6C22;"> <b>{{ Auth::user()->name }}</b>  </span> welcome to auctionear <br>click button bellow to place a bid</p>
                @endif

                @if(auth()->user()->type == 'seller')
                  <h1 class=" display-3 text-primary" style="margin-top:100px;"> <b>Auctioneer</b></h1>
                  <p class="text-dark" >Hello <span class="text-primary"> <b>{{ Auth::user()->name }}</b>  </span> welcome to auctionear <br>click button bellow to create a auction</p>
                @endif

                

                <center>
                 
          <div class="list container-md mt-5">

                @if(auth()->user()->type == 'user')
                  <h1 class="text-center" style="color:#FF6C22;" >VEHICLE AVAILABLE</h1>
                  <div class="row gy-3 mt-4">
                @endif

                @if(auth()->user()->type == 'seller')
                  <h1 class="text-center text-primary">VEHICLE AVAILABLE</h1>
                  <div class="row gy-3 mt-4">
                @endif

         
              @foreach($autos as $auto)
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <img src="assets/images/{{$auto->auto_image}}" class="img-fluid" />
                  <div class="col text-dark">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    <br>
                    {{$auto->suggested_price}}
                  </div>
                 
                    @if(auth()->user()->type == 'user')
                      <div class="d-grid">
                        <a id="btn_bid" href="/auctionPage?type={{$auto->id}}" class="btn mt-2">{{$auto->auto_type}}</a>
                      </div>
                    @endif

                    @if(auth()->user()->type == 'seller')
                      <div class="d-grid">
                      <a id="btn_sel" href="/auctionPage?type={{$auto->id}}" class="btn btn-primary mt-2 ">{{$auto->auto_type}}</a>
                      </div>

                    @endif
                 
                </div>
              @endforeach
      

            </div>
          </div>
          </center>
        </section>

            <!-- <script src="assets/js/jquery.min.js"></script> -->
            <!-- <script src="assets/js/owlcarousel/owl.carousel.min.js"></script> -->
            <script src="assets/js/main.js"></script>
        
     
@endsection