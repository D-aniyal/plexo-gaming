<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>{{config('app.name', 'Plexo')}}</title>
    
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo/Plexo Logo.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.theme.default.min.css') }}">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive-tabs/responsive-tabs.min.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup/magnific-popup.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate/animate.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


    @stack('styles')

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Header -->
    <header>
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="site-nav-wrapper">
    
                        <div class="navbar-header">
    
                            <!-- Mobile Menu Open Button -->
                            <span id="mobile-nav-open-btn">&#9776;</span>
                           <a  href="{{ url('/') }}">
                            <img src="{{ asset('img/logo/Plexo-Logo---Final-27th-Nov2.png') }}" alt="">
    </a>
                        </div>
    
                        <!-- Main Menu -->
                        <div  class="container" >
                            <div class="collapse navbar-collapse ">
                                <ul class="nav navbar-nav pull-right">
                                    <li><a class="" href=""></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PLAY <span class="caret"></span></a>
                                     
                                        <ul class="dropdown-menu">
                                          
                                          <li role="separator" class="divider"></li>
                                          <li><a href="{{url('/wager')}}">WAGERS</a></li>
                                          <li role="separator" class="divider"></li>
                                          <li><a href="{{url('tournament')}}">TOURNAMENTS</a></li>
                                        </ul>
                                      </li>
                                  
                                    
                                    <li><a class="" href="{{url('/leaderboard')}}">LEADERBOARD</a></li>
                                    <li><a class="" href="{{url('/support')}}">SUPPORT</a></li>
                                    <li><a class="" href="{{url('/shop')}}">SHOP</a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    
                                   
                                    
                                     <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                               
                                <a class="dropdown-item" href="http://localhost/PlexoGaming/public/bank">My Bank</a>
                                <br>
                                <a class="dropdown-item" href="{{ route('profile')}}">Profile</a>
                                <br>
                                <a class="dropdown-item" href="{{ route('generalprofile')}}">General Profile</a>
                                <br>
                               
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                                </ul>
                              
                             
                            
                              
                            
                            </div>
                        </div>
    
                        <!-- Mobile Menu -->
                        <div id="mobile-nav">
                            <!-- Mobile Menu Close Button -->
                            <span id="mobile-nav-close-btn">&times;</span>
    
                            <div id="mobile-nav-content">
                                <ul class="nav">
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PLAY <span class="caret"></span></a>
                                             
                                                <ul class="dropdown-menu">
                                                  
                                                  <li role="separator" class="divider"></li>
                                                  <li role="separator" class="divider"></li>
                                          <li><a href="{{url('/wager')}}">WAGERS</a></li>
                                          <li role="separator" class="divider"></li>
                                          <li><a href="{{url('tournament')}}">TOURNAMENTS</a></li>
                                                </ul>
                                              </li>
                                     
                                              <li><a class="" href="{{url('/leaderboard')}}">LEADERBOARD</a></li>
                                              <li><a class="" href="{{url('/support')}}">SUPPORT</a></li>
                                              <li><a class="" href="{{url('/shop')}}">SHOP</a></li>
                                   
                                </ul>
                                <ul class="nav navbar-nav ml-auto">
                                           <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                               
                              
                        
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                                  </ul>
                            </div>
                        </div>
    
                    </div>
                </div>
            </nav>
        </header>
    <!-- Header Ends -->

  @yield ('content')

   <!-- Footer  -->
   <footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Copyright &copy; 2019 All Rights Reserved By <span>PLEXO</span>
                </p>
            </div>
        </div>
    </div>

   

</footer>
<!-- Footer Ends -->

<!-- JQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Owl Carousel JS -->
<script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>

<!-- Waypoints -->
<script src="{{ asset('js/waypoints/jquery.waypoints.min.js') }}"></script>

<!-- Responsive Tabs JS -->
<script src="{{ asset('js/responsive-tabs/jquery.responsiveTabs.min.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('js/isotope/isotope.pkgd.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Counter -->
<script src="{{ asset('js/counter/jquery.counterup.min.js') }}"></script>

<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9EdV2JfPG1Vfviw9gf_HlblIUfs7Ie2E"></script>

<!-- Easing -->
<script src="{{ asset('js/easing/jquery.easing.1.3.min.js') }}"></script>

<!-- WOW JS -->
<script src="{{ asset('js/wow/wow.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>