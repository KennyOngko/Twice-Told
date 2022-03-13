<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TWICE TOLD') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/ce981c7861.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Hubballi" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .content-font{
            font-size: 12pt;
            font-weight: bold;
            text-decoration: none;
            color: black;
            align-self: center;
        }
        .menu-utama{
            width: 50%;
            display: flex;
            justify-content: space-evenly;
        }

        .footer-bottom {
            background-image: url("../img/footer.jpg");
            background-repeat:no-repeat;
            background-size: 100%;
            width: 100%;
            text-align: center;
        }
        .whats-app {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 5px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            right: 10px;
            z-index: 100;
            display: flex;
            text-decoration: none;
            justify-content: center;
            align-items: center;
        }
        a:hover{
            text-decoration: none;
        }

        .my-float {
            margin-top: 10px;
        }

        @media (max-width:485px){
            .content-font{
                padding-left: 0;
                margin-left: 0;
                font-size: 0.85rem;
                width: 50%;
            }
            .button-footer{
                width: 30% !important;
            }
            .footer-content1{
                font-size: 20pt !important;
            }
            .footer-content2{
                font-size: 10pt !important;
            }
            .phone-number{
                font-size: 12pt !important;
                text-align: center !important;
            }
            .logo{
                width: 170% !important;
            }
        }
        .navbar{
            background-color: antiquewhite !important;   
        }
        .footer-phone{
            font-size: 20pt;
        }
        .footer-phone:hover{
            color:#D2B48C !important;
            
        }
        .dropdown-item:hover, .dropdown-item:focus{
            background-color: #D2B48C  !important;
        }
        .logo{
            width: 50%;
        }
    </style>
</head>
<body style="background-color: #F5F3F0 !important; ">
    <div id="app " style="font-family:'Hubballi', cursive !important; position: relative; ">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="min-height: 6rem; ">
            <div class="container" style="max-width: 100%;">
                <a class="navbar-brand" style="width:12%; text-align:center; color: #B48264 ;" href="{{ url('/') }}">
                    <img class="logo" src="../img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto menu-utama">
                        <a class="content-font" style="color: #B48264;" href="{{route('about_us')}}">ABOUT US</a>
                        <a class="content-font" style="color: #B48264;" href="{{route('product')}}">PRODUCT</a>
                        <a class="content-font" style="color: #B48264;" href="{{route('discussion_list')}}">FORUM</a>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle content-font" style=" color: #B48264  ;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>HELP</a>
                            <div class="dropdown-menu dropdown-menu-end" style="background-color: #B48264 ;"  aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="text-align:center; color: #ffff  ; " href="{{ route('sizing_guide') }}">
                                    SIZING GUIDE
                                </a>
                                <a class="dropdown-item" style="text-align:center; color: #ffff  ;" href="{{ route('shipping') }}">
                                    SHIPPING & DELIVERY
                                </a>
                                <a class="dropdown-item" style="text-align:center; color: #ffff  ;" href="{{ route('return_policy') }}">
                                    RETURN POLICY
                                </a>
                            </div>
                        </li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav " style="width: 10%;">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #B48264  ;" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #B48264  ;" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #B48264  ;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </nav>

        <main >
            <a class="whats-app my-float" target="_blank" title="Chat With Us" href="https://api.whatsapp.com/send?phone=(6281806357228)"><i class="fa-brands fa-whatsapp"></i></a>
            @yield('content')
        </main>
        <!-- ============================ Footer Start ================================== -->
        <footer class="footer">
            <div class="footer-bottom ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0 footer-content1" style="font-size: 30pt; color:#F5F3F0;">Get in Touch With Us</p>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0 footer-content2" style="font-size: 12pt; color:#F5F3F0;">You Can Reach Us If You Are Intersted In Our Product Here</p>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center" style="padding-top: 10px; padding-bottom:10px;">
                            <a href=""  style="text-decoration:none;">
                                <button style="width:9%; height:2.5rem; border:none; color:#B48264;" class="button-footer">OUR PRODUCT</button>
                            </a>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center" style="padding-top: 10px; padding-bottom:10px;">
                            <a href=""  style="text-decoration:none;">
                                <button style="width:9%; height:2.5rem; border:none; color:#B48264;" class="button-footer">OUR SHOPEE</button>
                            </a>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0 footer-content2" style="color: #F5F3F0;">OR YOU CAN CONTACT US AT</p>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <a class="phone-number" href="tel:085813600655" title="Click to call" class="mb-0 footer-phone" style="color: #F5F3F0;"><i class="fa-solid fa-phone">&nbsp;&nbsp;+62-85-813-600-655</i></a>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0 footer-content2" style="color: #F5F3F0">Copyright © 2022 <a style="text-decoration: none; color:#F5F3F0;" href="">Twice-Told</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- ============================ Footer End ================================== -->
    </div>
</body>
</html>
