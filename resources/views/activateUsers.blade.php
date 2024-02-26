<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Big Bike</title>
        

 <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="assets/js/main.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Styles -->

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
        tbody .btn{
           padding:5px !important;
           color:blue !important;
        }
        tbody .btn:hover{
           color:white !important;
        }
        .activate-user{
            margin:auto !important;
            
            
        }

        .activate-user .btn{
           width: 150px !important;
            
            
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
        tbody .btn{
           padding:5px !important;
           color:blue !important;
        }
        tbody .btn:hover{
           color:white !important;
        }
        .activate-user{
            margin:auto !important;
            
            
        }

        .activate-user .btn{
           width: 150px !important;
            
            
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

    <body class="">
        
              <!-- nav -->
              <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-warning p-4 ">
      <div class="container">
        <a class="navbar-brand text-primary" href=""><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
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
                    <section class="container mt-5">
                                <nav class="navbar bg-light ">
                                    <div class="container bg-light ">
                                        <div class="activate-user">
                                        <h1><a class="btn btn-outline-primary text-light active shadow" href="/admin/home">Users</a><a class="btn btn-primary mx-3 shadow" href="/activateUsers">Active Users</a></h1>
                                        </div>
                                        <form id="searchForm">
                                        <div class="input-group ">
                                            <input type="text" class="form-control shadow" id="searchInput" placeholder="Search for...">
                                            <button class="btn btn-primary" type="button" onclick="search()">Search</button>
                                        </div>
                                        </form>
                                    </div>
                                </nav>
                            <table class="table">
                                <thead>
                                    <tr> <th colspan="6" class="shadow bg-warning pt-4 p-3 border-light text-center"> <h2>ACTIVATE USERS</h2></th> </tr>     
                                </thead>
                                <thead>
                                    <tr class>
                                    <th scope="col" class="table-primary">Id</th>
                                    <!-- <th scope="col" class="table-primary text-center">Credentials</th> -->
                                    <th scope="col" class="table-primary">Full Name</th>
                                    <th scope="col" class="table-primary">Contact Number</th>
                                    <th scope="col" class="table-primary">email</th>
                                    <th scope="col" class="table-primary text-center">Activate User</th>
                                    </tr>
                                </thead>
                                <tbody>



                                <!-- <tr>
                                    <th scope="row" class="table-trans">1</th>
                                    <td class="btn btn-primary col-12 btn-md border-2 border-primary rounded-0"  onclick="viewCredentials()"> View </td>
                                    <td class="table-trans">Mark</td>
                                    <td class="table-trans">Otto</td>
                                    <td class="table-trans">@mdoasdasdasdsadsa</td>
                                    <td class="btn btn-outline-primary col-12 btn-md border-2 border-primary rounded-0" onclick="showActivateAlert()">Activate</td>
                                    </tr> -->


                                    @foreach($users as $user)
          <tr>
            <!-- <td><img src="images/profiles/{{ $user->profile_img}}" class="rounded-circle object-fit-cover" id="userImg" /></td> -->
            <td class="fw-bold">{{ $user->id}}</td>
            <!-- <td class="btn btn-primary col-12 btn-md border-2 border-primary rounded-0"  onclick="viewCredentials()"> View </td> -->
            <td class="fw-bold">{{ $user->name}}</td>
            <td>{{ $user->phone}}</td>
            <td>{{ $user->email}}</td>
            <td>
              <div class="d-flex flex-column gap-2">

                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#{{ $user->id }}activateUserBackdrop">
                  Reject User
                </button>
                <div class="modal fade" id="{{ $user->id }}activateUserBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Reject User: {{ $user->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Are you sure you want to reject {{ $user->name}}?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fs-2" data-bs-dismiss="modal">Close</button>
                        <a class="btn btn-outline-danger fs-2" href="{{ url('rejectUser')}}?id={{ $user->id}}">Reject User</a>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <a href="{{ url('rejectUser')}}?id={{ $user->id}}" class="btn btn-outline-danger btn-lg">
                  Reject User
                </a> --}}
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-success"
                  data-bs-toggle="modal"
                  data-bs-target="#{{ $user->id}}"
                >
                  Activate User
                </button>
              </div>

              <!-- Modal -->
              <div
                class="modal fade"
                id="{{ $user->id}}"
                tabindex="-1"
                aria-labelledby="{{ $user->id}}Label"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-2" id="{{ $user->id}}Label">
                        Account Details
                      </h1>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <p class="sm-title">
                        Name: <span class="text-success">{{ $user->name}}</span>
                      </p>
                      <p class="sm-title">
                        Contact Number:
                        <span class="text-success">{{ $user->phone}}</span>
                      </p>
                      <p class="sm-title">
                        Email:
                        <span class="text-success">{{ $user->email}}</span>
                      </p>
                      <a
                        target="_blank"
                        
                        onclick="viewCredentials{{ $user->id}}()"
                        class="btn btn-success fs-3"
                      >
                        View Credentials
                      </a>
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary fs-2"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                      <a href="{{ url('activate')}}?id={{ $user->id}}" class="btn btn-success fs-2">
                        Activate User
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        @endforeach


                                    
                                </tbody>
                                </table>
                        
                    </section>
                    

                                            <script>
                            function showActivateAlert() {
                                // Create an alert
                                var activateAlert = `
                                    <div class="alert alert-success alert-dismissible fade show fixed-top" role="alert">
                                        Are you sure you want to activate these users? <br>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <button type="button" class="btn btn-success" onclick="activateUsers()">Activate</button>
                                        <button type="button" class="btn btn-danger" onclick="declineActivation()">Decline</button>
                                    </div>
                                `;

                                // Append the alert to the body
                                document.body.insertAdjacentHTML('beforeend', activateAlert);
                            }

                            function activateUsers() {
                                // Perform the activate action (you can implement server-side logic here)

                                // Close the alert
                                document.querySelector('.alert').remove();
                                
                                // Optionally, you can display a confirmation message
                                alert('Users have been activated.');
                            }

                            function declineActivation() {
                                // Handle the decline action (you can implement server-side logic here)

                                // Close the alert
                                document.querySelector('.alert').remove();
                                
                                // Optionally, you can display a message
                                alert('Activation declined.');
                            }
                        </script>


                        <!-- search engine -->
                        <script>
                            function search() {
                            var searchQuery = document.getElementById('searchInput').value;
                            alert('Searching for: ' + searchQuery);
                            // You can replace the alert with your actual search functionality here
                            }
                        </script>

                        <!-- for credentials view -->
                        
                        @foreach($users as $user)
       
                        <script>
                        function viewCredentials{{ $user->id}}() {
                        // Replace the following with the actual user information
                        var name = '{{ $user->name}}';
                        var address = '123 Main St, Cityville';
                        var age = 25;
                        var email = '{{ $user->email}}';
                        var contactNumber = '+1 555-1234';
                        var validIdUrl = 'assets/images/red.jpg'; // Replace with the actual URL

                        var credentials = `
                            <p><strong>Name:</strong> ${name}</p>
                            <p><strong>Address:</strong> ${address}</p>
                            <p><strong>Age:</strong> ${age}</p>
                            <p><strong>Email:</strong> ${email}</p>
                            <p><strong>Contact Number:</strong> ${contactNumber}</p>
                            <p><strong>Valid ID:</strong> <a href="${validIdUrl}" target="_blank">View Valid ID</a></p>
                            <p><strong>Valid ID:</strong> <a href="${validIdUrl}" target="_blank">View Valid ID</a></p>
                        `;

                        var popupWindow = window.open('', '_blank', 'width=400,height=500,scrollbars=yes,resizable=yes');
                        popupWindow.document.write('<html><head><title>User Information</title></head><body>');
                        popupWindow.document.write('<h2>User Information</h2>');
                        popupWindow.document.write(credentials);
                        popupWindow.document.write('</body></html>');
                        popupWindow.document.close();
                        }
                    </script>
                    @endforeach
                    
<script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
       

    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/fae056ab45.js"
      crossorigin="anonymous"
    ></script>
    <script src="a/js/main.js"></script>
            
    </body>
</html>