<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nanny</title>
    
    <script src="{{ asset('js/app.js') }}"></script>
   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website/navbar.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>
<body>
    <div id="app">

        <!-- Navbar -->
        <div class="custom-nav p-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex">
                            <div>
                                <a href="{{url('/')}}">
                                    <img src="{{asset('website/images/static/Logo.png')}}" class="img-fluid">
                                </a>
                            </div>

                            <div class="ml-auto">
                               <div class="nav-items" id="sideMenu">
                                    <ul>
                                        <li><a href="{{url('/')}}">home</a></li>
                                        <li><a href="{{url('/about-us')}}">about us</a></li>
                                        <li><a href="{{url('/services')}}">services</a></li>
                                        <li><a href="{{url('/contact-us')}}">contact</a></li>

                                        @if(Auth::User() && Auth::User()->admin == 0)
                                            <li><a href="{{route('account.dashboard')}}">profile</a></li>
                                        @elseif(Auth::User() && Auth::User()->admin == 1)
                                            <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                                        @else
                                            <li><a href="{{url('/login')}}">login</a></li>
                                        @endif
                                    </ul>
                               </div>
                               <!-- Toggle Button -->
                               <button type="button" class="btn btn-light rounded-circle shadow-none d-lg-none" id="openMenu">
                                <i class="fas fa-bars"></i>
                               </button>
                               <button type="button" class="btn btn-light rounded-circle shadow-none d-lg-none" id="closeMenu">
                                <i class="fas fa-times"></i>
                               </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="main">
            @yield('content')
        </main>
    </div>
    <script>
        $(document).ready(function(){
            $('#sideMenu').css("left", "-100%")
            $('#closeMenu').css("display", "none")

            $('#openMenu').click(function(){
                $('#sideMenu').css("left", "0")
                $('#openMenu').css("display", "none")
                $('#closeMenu').css("display", "block")
            })

            $('#closeMenu').click(function(){
                $('#sideMenu').css("left", "-100%")
                $('#closeMenu').css("display", "none")
                $('#openMenu').css("display", "block")
            })
        })
    </script>
</body>
</html>