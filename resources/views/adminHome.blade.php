<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Big Bike</title>

   
          <!-- Fonts -->
                  <!-- Fonts -->
                  <link rel="preconnect" href="https://fonts.bunny.net">


<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <!-- bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Styles -->

  <!-- carousel -->
  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
  <script src="assets/js/main.js"></script>


<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
crossorigin="anonymous"
/>

<!--Font Links-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap"
rel="stylesheet"
/>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap"
rel="stylesheet"
/>

        <script src="assets/js/main.js"></script>

        
    <style>
        /* #picturebox{
        width: 80%
        background-color: grey;
        color: white;
        } */

        thead th{
            border: 1px solid black ;
            border-collapse: collapse;
            text-align:center !important;
            padding:15px !important;

        }

         tbody td{
            border: 1px solid black !important;
            border-collapse: collapse !important;  
            
        }
        tbody th{
            border: 1px solid black;
            border-collapse: collapse;  
        }
        .navbar{
            Z-index:10 !important;
        }

        @media only screen and (min-width: 375px) and (max-width: 896px) {
            thead th{
            border: 1px solid black ;
            border-collapse: collapse;
            text-align:center !important;
            padding:0 !important;
            font-size:1.5vh !important;

        }
    
        tbody tr td{
            border: 1px solid black;
            border-collapse: collapse;  
            padding: 0 !important;
            font-size:1vh !important;
            margin: 0 !important;
        }
        tbody tr th{
            border: 1px solid black;
            border-collapse: collapse;  
            padding: 0px !important;
            font-size:10px !important;
            margin: 0 !important;
        }
        /* tbody .btn{
           padding:5px !important;
           color:blue !important;
        }
        tbody .btn:hover{
           color:white !important;
        } */
        .activate-user{
            margin:auto !important; 
        }

        .activate-user .btn{
           width: 150px !important;
        }
        .user-ban{
          text-decoration:none !important;
          font-size:1vh !important;
          height: 30px !important;
          
        }

      
        .btn-g{
          padding:2px !important;
        }
        #searchForm {
           margin:auto !important;
        }
        #searchForm #searchInput{
            width:210px !important;
        }
        #searchForm .btn{
            width:110px !important;

        }
            
        }
        @media only screen and (min-width: 360px) and (max-width: 740px) {
            thead th{
            border: 1px solid black ;
            border-collapse: collapse;
            text-align:center !important;
            padding:0 !important;
            font-size:1.5vh !important;

        }
    
        tbody td{
            border: 1px solid black;
            border-collapse: collapse;  
            padding: 0px !important;
            font-size:1vh !important;
            margin: 0 !important;
        }
        tbody th{
            border: 1px solid black;
            border-collapse: collapse;  
            padding: 0px !important;
            font-size:1.8vh !important;
            margin: 0 !important;
        }
        /* tbody .btn{
           padding:5px !important;
           color:blue !important;
        }
        tbody .btn:hover{
           color:white !important;
        }
        .activate-user{
            margin:auto !important;
            
            
        } */

        .ban-user .btn{
           width: 140px !important;
            
            
        }
        #searchForm {
           margin:auto !important;
        }
        #searchForm #searchInput{
            width:210px !important;
        }
        #searchForm .btn{
            width:110px !important;

        }
            
        }

        .logout #navbarDropdown {
          z-index: 10000000 !important;
        }

        

    
    </style>
    </head>

    <body>
        
              <!-- nav -->
              <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-warning p-4 ">
      <div class="container">
        <a class="navbar-brand text-primary" href=""> <img src="/assets/images/LOGO2.png" alt="logo"><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <!-- <li class="nav-item">
              <a class="nav-link mx-0 active" aria-current="page" href="/seller/home">Home</a>
            </li> -->
            <!-- <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
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
            </div> -->
            <!-- <li class="nav-item">
              <a class="nav-link mx-0" href="#">How to sell</a>
            </li> -->
            <li class="logout nav-item dropdown mt-1">
                                <a id="navbarDropdown" class="btn btn-primary btn-sm dropdown-toggle text-light bg-primary"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end  bg-primary" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item text-light2" href="/chats">
                                        {{ __('Message') }}
                                    </a> -->
                                
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

        <section  class="container p- mt-5">
                    <nav class="navbar bg-light ">
                        <div class="container bg-light">
                            <div class="ban-user">
                            <h1><a class="btn btn-outline-primary text-light active shadow" href="/admin/home">Ban user</a><a class="btn btn-primary mx-3 shadow" href="/activateUsers">Activate User</a></h1>
                            </div>
                            <!-- <form id="searchForm">
                              <div class="input-group ">
                                <input type="search" class="form-control shadow" aria-label="Search" placeholder="Search for...">
                                <button  class="btn btn-primary" type="button"  id="myInput"  onkeyup="myFunction()">Search</button>
                              </div>
                            </form> -->
                            <form class="d-flex gap-2">
                            <input
                                class="form-control mr-sm-2"
                                type="search"
                                placeholder="Search Name"
                                aria-label="Search"
                                id="myInput"
                                onkeyup="myFunction()"
                            />
                            </form>
                        </div>
                    </nav>


                        <table class="table" id="myTable">
                                    <thead>
                                        <tr> <th colspan="5" class="shadow bg-primary text-light pt-4 border-light"> <h2>BAN USER</h2></th> </tr>
                                    
                                    </thead>
                                <thead>
                                    <tr>
                                    <th scope="col" class="table-primary">Id</th>
                                    <th scope="col" class="table-primary">Full Name</th>
                                    <th scope="col" class="table-primary">Contact Number</th>
                                    <th scope="col" class="table-primary">email</th>
                                    <th scope="col" class="table-primary text-center">Ban user</th>
                                    <!-- change role -->
                                    <!-- <th scope="col" class="table-primary text-center">Change role</th> -->
                                 
                                 
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                @foreach($users as $user)
                                    <tr>
                                            <td class="fw-bold">
                                            <!-- <img src="images/profiles/{{ $user->profile_img}}" class="rounded-circle object-fit-cover" id="userImg" /> -->
                                               ID : {{ $user->id }}
                                            </td>
                                            <td class="fw-bold">
                                                <div class="d-flex flex-column d-sm-none">
                                                    <!-- <img src="images/profiles/{{ $user->profile_img}}" class="rounded-circle object-fit-cover" id="userImg" /> -->
                                                    
                                                    <!-- SINOBRA YA ID -->
                                                    <!-- ID : {{ $user->id }} -->
                                                </div>
                                                {{ $user->name}}
                                            </td>
                                        <td>{{ $user->phone}}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <center>
                                            <button type="button" class="btn user-ban btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $user->id }}userBackdrop">
                                                Ban User
                                            </button>
                                            </center>
                                            {{-- <a href="{{url('banUser')}}?id={{ $user->id}}" class="btn btn-danger sm-title">Ban user</a> --}}
                                            <div class="modal fade" id="{{ $user->id }}userBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Ban User ID: {{ $user->id }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to Ban {{ $user->name}} ID:{{ $user->id}}?
                                                            </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary fs-2" data-bs-dismiss="modal">Close</button>
                                                            <a class="btn btn-outline-danger fs-2" href="{{url('banUser')}}?id={{ $user->id}}">Ban User</a>
                                                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <!-- CHANGE ROLE -->
                                       
                                        <!-- <td> -->
                                        <!-- <center>
                                        <div class="dropdown">
                                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                               Change role
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">1 admin</a></li>
                                                <li><a class="dropdown-item" href="#">2 auctioneer</a></li>
                                                <li><a class="dropdown-item" href="#">0 Bidder</a></li>
                                            </ul>
                                        </div>
                                        </center> -->
                                        <!-- </td> -->
                                       
                                        
                                        
                                    </tr>
                                    @endforeach
                                    
                                    
                                </tbody>
                        </table>
        </section>

              
                    <script>
                    function showBanAlert() {
                        // Create an alert
                        var banAlert = `
                            <div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert">
                                Are you sure you want to ban this user? 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <button type="button" class="btn btn-danger btn-md " onclick="banUser()">Ban</button>
                            </div>
                        `;

                        // Append the alert to the body
                        document.body.insertAdjacentHTML('beforeend', banAlert);
                    }

                    function banUser() {
                        // Perform the ban action (you can implement server-side logic here)

                        // Close the alert
                        document.querySelector('.alert').remove();
                        
                        // Optionally, you can display a confirmation message
                        alert('User has been banned.');
                    }
                </script>

                <!-- seach engine -->
                <script>
                    function search() {
                    var searchQuery = document.getElementById('searchInput').value;
                    alert('Searching for: ' + searchQuery);
                    // You can replace the alert with your actual search functionality here
                    }
                </script>

        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"
        ></script>
        <script src="/assets/js/tableSearch.js"></script>
            
    </body>
</html>