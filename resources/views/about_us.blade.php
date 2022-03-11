<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
      <script src="https://kit.fontawesome.com/ce981c7861.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <style>
          /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
          html{line-height:1.15;-webkit-text-size-adjust:100%}
          body{margin:0}a{background-color:transparent}[hidden]{display:none}
          html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,
          :after,
          :before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}
          svg,video{display:block;vertical-align:middle}video{width:100%;height:auto}
          .bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}
          .bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}
          .border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}
          .border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}
          .font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}
          .mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}
          .ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}
          .overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}
          .pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}
          .shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}
          .text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}
          .text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}
          .text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
          .text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}
          .text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}
          .text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}
          .text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}
          .underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
          .w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}
          @media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}
          .sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}
          .sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}
          .sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}
          .md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark)
          {.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}
          .dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}
          .dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}
          .dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}
          .dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
          .dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
      </style>
      <style>
        .box-outer-about-us{
            display: flex;
            width: 70%;
            justify-content: center;
            padding-bottom: 3.19%;
            padding-top: 3.1%;
        }
        .content-about-us{
            
            width: 50%;
        }
        h1{
            font-size: 3.25rem !important;
        }
        p{
            font-size: 1.25rem;
        }
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
            }
            .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
        }
        @media (max-width:400px){
            .content-about-us{
                width:80%;
            }
            .box-outer-about-us{
                display: flex;
                width: 100%;
                justify-content: center;
                padding: 5px;
                padding-bottom: 20px;
                padding-top: 20px
            }
            h1{
                font-size: 2.25rem !important;
            }
            p{
                font-size: 1rem;
            }
            .background{
                background-size: 300% !important;
                background-position:top !important;
                height: 88vh !important;
            }
        }
        .background{
            background-image: url('img/about us.jpg');
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: 100%;
            padding: 0% !important;
            margin: 0% !important;
            height: 85.3vh;
        }
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
            background-image: url("img/footer.jpg");
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
    <title>About US</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="min-height: 6rem; ">
        <div class="container" style="max-width: 100%;">
            <a class="navbar-brand" style="width:12%; text-align:center; color: #B48264 ;" href="{{ url('/') }}">
                <img class="logo" src="img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto menu-utama">
                    <a class="content-font" style="color: #B48264  ;" href="{{route('about_us')}}">ABOUT US</a>
                    <a class="content-font" style="color: #B48264  ;" href="{{route('product')}}">PRODUCT</a>
                    <a class="content-font" style="color: #B48264  ;" href="{{route('discussion_list')}}">FORUM</a>
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

    {{-- <div class="preloader">
        <div class="loading">
            <div class="spinner-grow" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div> --}}
<div class="background" >
    <div class="box-outer-about-us">
        <div class="content-about-us">
            <h1 style="color: white">Story of Twice Told</h1>
            <p style="color: white">
                Represent a state of being calm, peaceful, and untroubled. Achieving this positive state of mind means you won’t feel as troubled by life’s ups and downs. While addiction often brings chaos, a loss of control, and emotional turmoil, serenity will help you stay calm and true to yourself.            
            </p>
            <p style="color: white">
                Serene Candle was built to help pamper ourselves, remember the importance of self-love because all activities we do start from ourselves. Self Healing is very important. When our soul & body are healthy, our activities and thoughts will be better.
            </p>
            <p style="color: white">
                The goal is to make candles / other fragrances for people to relax more & also make the room more aesthetic
            </p>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    // $(document).ready(function(){
    // $(".preloader").fadeOut();
    // })
</script>
</html>