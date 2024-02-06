<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
         
           
        </style>
    </head>
    <body class="antialiased"> 
                      
                <!-- nav -->
      <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-light p-2 ">
      <div class="container">
        <a class="navbar-brand text-primary" href="/#"><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="/#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Vehicle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">How to start</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Company
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">About Us</a></li>
                <li><a class="dropdown-item" href="#">Contact us</a></li>
              </ul>
            </li>
          </ul>
          
                    
                        <div style="margin-top:15px;"  id="btn-G" class="btn-reg">
                            @if (Route::has('login'))
                                
                                    @auth
                                        <a  href="{{ route('home') }}" class="text-decoration-none text-warning">Dashboard</a>
                                    @else
                                        <p><a  style="" href="{{ route('login') }}" type="button" class="btn btn-log text-light btn-md rounded-1">Login</a>
                                            
                                    @if (Route::has('register'))
                                                
                                        <a  style="" href="{{ route('register') }}" type="button" class="btn btn-log text-light btn-md m-1 rounded-1">Sign-up</a></p>

                                    @endif 

                                    @endauth
                                       
                                    @endif
                            </div>        
                </div>
            </div>
        </nav>                 
                <div class=" container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-light" style="background-color:#FF6C22 ;">{{ __('Sign-up') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                                            <div class="col-md-6">
                                                <input id="name" 
                                                type="text" class="form-control @error('name') is-invalid @enderror  border-primary-subtle" 
                                                placeholder="{{ __('Name') }}" 
                                                name="name" 
                                                value="{{ old('name') }}" 
                                                required autocomplete="name" 
                                                autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    

                                     
                                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                            <div class="col-md-6">
                                                <input id="email" 
                                                type="email" 
                                                class="form-control @error('email') is-invalid @enderror  border-primary-subtle" 
                                                placeholder="{{ __('Email Address') }}" 
                                                name="email" 
                                                value="{{ old('email') }}" 
                                                required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- address -->
                                        <div class="row mb-3">
                                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('address') }}</label> -->

                                            <div class="col-md-12">
                                                <input id="address" 
                                                type="address" 
                                                class="form-control @error('address') is-invalid @enderror  border-primary-subtle"
                                                placeholder="{{ __('Complete Address') }}" 
                                                name="address" 
                                                required 
                                                autocomplete="address"
                                                >

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- for contact -->
                                        <div class="row mb-3">
                                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                                            <div class="col-md-12">
                                                <input id="phone" 
                                                type="tel" 
                                                class="form-control @error('phone') is-invalid @enderror  border-primary-subtle"
                                                placeholder="{{ __('phone 63+') }}" 
                                                name="phone" 
                                                required 
                                                autocomplete="phone"
                                                pattern="[0-9]{11}"
                                                >

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                            <!-- Valid Id 1-->
                                            <div class="row mb-3 ">
                                            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                                            <div class="col-md-6 mb-3">
                                            <div class="mb-2 d-flex justify-content-center">
                                                <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                                alt="example placeholder" style="width: 200px;" />
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div class="btn btn-primary btn-rounded">
                                                    <label class="form-label text-white m-1" for="customFile1">Valid Id</label>
                                                    <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" required>
                                                </div>
                                                
                                            </div>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    

                                                 <!-- Valid Id 2-->
                                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ValidId2') }}</label> -->

                                            <!-- <div class="col-md-6">
                                            <div class="mb-4 d-flex justify-content-end">
                                                <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                                alt="example placeholder" style="width: 270px;" />
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div class="btn btn-primary btn-rounded">
                                                    <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                                    <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                                </div>
                                                
                                            </div>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                         -->

                                            
                                            <!-- for password -->
                                        <div class="row mb-3">
                                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                                            <div class="col-md-12">
                                                <input id="password"
                                                 type="password" 
                                                 class="form-control @error('password') is-invalid @enderror  border-primary-subtle" 
                                                 placeholder="{{ __('Password') }}" 
                                                 name="password" 
                                                 required autocomplete="new-password">
                                                 

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->

                                            <div class="col-md-12">
                                                <input id="password-confirm" 
                                                type="password" class="form-control  border-primary-subtle" 
                                                placeholder="{{ __('Confirm Password') }}" 
                                                name="password_confirmation" 
                                                required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="register row mb-0">
                                            <div class="col-md-12 offset-md-">
                                                <button 
                                                type="submit" 
                                                class="btn btn-primary col-md-12">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
            
        
     
    </body>
</html>