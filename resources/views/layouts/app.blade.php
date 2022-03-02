<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .content-font{
            font-size: 12pt;
            font-weight: bold;
            text-decoration: none;
            color: black;
        }
        .menu-utama{
            width: 80%;
            display: flex;
            justify-content: space-evenly;
        }

        .footer-bottom {
            background-image: url("img/footer.jpg");
            background-repeat:no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            text-align: center;
        }

        @media (max-width:400px){
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
        }
        .navbar{
            background-color: #D2B48C !important;   
        }
    </style>
</head>
<body style="background-color: #F5F3F0 !important; ">
    <div id="app " style="font-family: custom-font !important; position: relative; ">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="min-height: 6rem; ">
            <div class="container" style="max-width: 100%;">
                <a class="navbar-brand" style="color: #FFFFFF;" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto menu-utama">
                        <a class="content-font" style="height: 100%; color: #FFFFFF;" href="{{route('about_us')}}">About Us</a>
                        <a class="content-font" style="height: 100%; color: #FFFFFF;" href="{{route('product')}}">Product</a>
                        <a class="content-font" style="height: 100%; color: #FFFFFF;" href="">Forum</a>
                        <a class="content-font" style="height: 100%; color: #FFFFFF;" href="">Help</a>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #FFFFFF;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #FFFFFF;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #FFFFFF;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            @yield('content')


        </main>
        <!-- ============================ Footer Start ================================== -->
        <footer class="footer">
            <div class="footer-bottom ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0 footer-content1" style="font-size: 30pt; color:#F5F3F0;">Plan to buy Our Products</p>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0 footer-content2" style="font-size: 12pt; color:#F5F3F0;">You Can Reach Us If You Are Intersted In Our Product Here</p>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center" style="padding-top: 10px; padding-bottom:10px;">
                            <button style="width:10%; height:3rem; border:none;" class="button-footer">
                                <a href="" style="text-decoration:none; color:#B48264;">OUR PRODUCT</a>
                            </button>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center" style="padding-top: 10px; padding-bottom:10px;">
                            <button style="width:9%; height:2.5rem; border:none;" class="button-footer">
                                <a href=""  style="text-decoration:none; color:#B48264;">OUR SHOPEE</a>
                            </button>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0 footer-content2" style="color: #F5F3F0;">OR YOU CAN CONTACT US AT</p>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0 footer-content2" style="color: #F5F3F0">Copyright © 2022 <a href="">Twice-Told</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- ============================ Footer End ================================== -->
    </div>
</body>
</html>
