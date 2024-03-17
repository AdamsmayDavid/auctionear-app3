<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- Fonts -->
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
        <!-- <script src="assets/js/main.js"></script> -->
        <!-- fafa icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->


       

<!-- <script src="assets/js/jquery.min.js"></script> -->
<script src="assets/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
    
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <-- Left Side Of Navbar --
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <-- Right Side Of Navbar --
                    <ul class="navbar-nav ms-auto">
                        <-- Authentication Links --
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
                 <!-- nav -->
      <nav id="NavBar" class="navbar fixed-top navbar-expand-lg navbar-trans bg-warning p-3 z-index-5 shadow">
      <div class="container">
        <a class="navbar-brand text-primary" href=""><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="/home">Home</a>
            </li>
            <div class="collapse navbar-collapse mx-2" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Vehicle
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark bg-primary">
                            @foreach($autos as $auto)
                            <li><a class="dropdown-item" href="/biddersSedan"><i class="fa fa-car" aria-hidden="true"></i> {{$auto->auto_type}} </a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
           
            


                @if(auth()->user()->type == 'user')
                <li class="logout nav-item dropdown">
                      <a id="navbarDropdown" class="btn btn-sm dropdown-toggle text-light" style="background-color:#FF6C22;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      &nbsp;{{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu" style="background-color:#FF6C22;" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item " href="/chats">
                      <i class="fa fa-paper-plane" aria-hidden="true"></i> {{ __('Message') }} 
                          </a>
                      
                            <a class="dropdown-item " href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                            </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
                @endif

                @if(auth()->user()->type == 'seller')
                <li class="logout nav-item dropdown mt-1 mx-2">
                                <a id="navbarDropdown" class="btn btn-primary btn-sm dropdown-toggle text-light"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end  bg-primary" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item " href="/chats">
                                 <i class="fa fa-paper-plane" aria-hidden="true"></i> {{ __('Message') }}
                                  </a>
                                
                                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>{{ __('Logout') }}
                                    </a>
                

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                @endif

                  

          </ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

      <!-- script file -->
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
 
           
</body>
</html>
