<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Big Bike</title>

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
      
      .table-primary{
        border:white solid;
        background-color:#FF6C22;
      }
      .table-trans{
        border:white solid;
      }
    
    </style>
    </head>

    <body class="">
        
              <!-- nav -->
              <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-light p-4 ">
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
                    <ul class="dropdown-menu dropdown-menu-primary bg-primary">
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
                                <a id="navbarDropdown" class="btn btn-primary btn-sm dropdown-toggle text-light"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-primary dropdown-menu-end  bg-primary" aria-labelledby="navbarDropdown">
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
                    <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid">
                            <h1><a class="btn btn-outline-primary text-light active" href="/admin/home">Users</a><a class="btn btn-primary mx-2" href="">Active Users</a></h1>
                            <form id="searchForm">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" id="searchInput" placeholder="Search for...">
                                <button class="btn btn-primary" type="button" onclick="search()">Search</button>
                              </div>
                            </form>
                        </div>
                    </nav>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="table-primary">Id</th>
                            <th scope="col" class="table-primary text-center">Credentials</th>
                            <th scope="col" class="table-primary">Full Name</th>
                            <th scope="col" class="table-primary">Contact Number</th>
                            <th scope="col" class="table-primary">email</th>
                            <th scope="col" class="table-primary text-center">Activate User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row" class="table-trans">1</th>
                            <td class="btn btn-primary col-12 btn-sm" onclick="viewCredentials()"> View </td>
                            <td class="table-trans">Mark</td>
                            <td class="table-trans">Otto</td>
                            <td class="table-trans">@mdo</td>
                            <td class="btn btn-primary col-12 btn-sm" onclick="showActivateAlert()">Activate users</td>
                            </tr>
                            
                            
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
                        <script>
                        function viewCredentials() {
                        // Replace the following with the actual user information
                        var name = 'John Doe';
                        var address = '123 Main St, Cityville';
                        var age = 25;
                        var email = 'john.doe@example.com';
                        var contactNumber = '+1 555-1234';
                        var validIdUrl = 'assets/images/red.jpg'; // Replace with the actual URL

                        var credentials = `
                            <p><strong>Name:</strong> ${name}</p>
                            <p><strong>Address:</strong> ${address}</p>
                            <p><strong>Age:</strong> ${age}</p>
                            <p><strong>Email:</strong> ${email}</p>
                            <p><strong>Contact Number:</strong> ${contactNumber}</p>
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
                    

            
    </body>
</html>