<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
      <script src="https://kit.fontawesome.com/ce981c7861.js" crossorigin="anonymous"></script>
      <!-- Styles -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
            font-size: 2rem !important;
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
            }
            h1{
                font-size: 1.25 !important;
            }
            p{
                font-size: 1rem;
            }
            .carousel-indicators li{
                height: 70px !important;
            }
            #custCarousel .carousel-indicators>li{
                width: 18% !important;
            }
            .carousel-item img{
                width: 70% !important;
                object-fit: cover !important;
            }
            .outer-border{
                flex-direction:column !important;   
            }

            .product-name{
                padding-left: 10%;
                font-size: 1.5rem !important; 
            }
            .currency{
                padding-top: 2%;
                padding-left: 10%;
            }
            .deskripsi{
                padding-top: 2%;
                padding-left: 10%;
                text-decoration: underline;
            }
            .deskripsi-content{
                width: 90%;
                text-align: justify;
                padding-left: 10%;
            }
            .botom-foto{
                width:70% !important;
            }
            .carousel-indicators{
                width: 100%;
                flex-direction: row !important;
            }
            .box-slider{
                width: 100% !important;
            }
            .color-title{
                padding-left: 10%;
            }
            .color-box{
                padding-left: 10%;
            }
            .img-fluid{
                height: 80px !important;
            }
            #custCarousel .carousel-indicators {
                position: static;

            }
        }

        .carousel-inner img {
            width: 100%;
            height: 100%
        }


        #custCarousel .carousel-indicators>li {
            width: 100px
        }

        #custCarousel .carousel-indicators li img {
            display: block;
            opacity: 0.5
        }

        #custCarousel .carousel-indicators li.active img {
            opacity: 1
        }

        #custCarousel .carousel-indicators li:hover img {
            opacity: 0.75
        }

        .carousel-item img {
            width: 50%;
        }
        .outer-border{
            display: flex;
            justify-content: center;
            max-width: 100%;
            padding-top:4%;
            padding-bottom: 0.5rem;
        }
        .img-fluid{
            width:100%;
            height: 100px;;
            object-fit: contain;
            padding-bottom: 5px;
        }
        .carousel-indicators{
            margin: 0 !important;
            padding-bottom: 1rem !important;
            bottom: -16px;
            left: -90px;
        }
        .box-slider{
            width:30%;
        }
        .box-diskripsi{

        }
        .list-inline-item{
            width: 20%;
        }
        .color-title{
            font-size: 1.5rem;
        }
        .currency{
            font-size: 1.25rem;
        }
        .deskripsi{
            font-size: 1.8rem;
        }
        .deskripsi-content{
            font-size: 14pt;
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
            background-position: center;
            background-size: cover;
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
        }
        .navbar{
            background-color: #D2B48C !important;   
        }
        .footer-phone{
            font-size: 20pt;
        }
        .footer-phone:hover{
            color:#D2B48C !important;
            
        }
        .dropdown-item:hover, .dropdown-item:focus{
            background-color: #B48264 !important;
        }
      </style>
    <title>About US</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm " style="min-height: 6rem; ">
        <div class="container" style="max-width: 100%;">
            <a class="navbar-brand" style="width:12%; text-align:center; color: #FFFFFF;" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto menu-utama">
                    <a class="content-font" style="color: #FFFFFF;" href="{{route('about_us')}}">About Us</a>
                    <a class="content-font" style="color: #FFFFFF;" href="{{route('product')}}">Product</a>
                    <a class="content-font" style="color: #FFFFFF;" href="{{route('discussion_list')}}">Forum</a>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle content-font" style=" color: #FFFFFF;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Help</a>
                        <div class="dropdown-menu dropdown-menu-end" style="background-color: #735240;"  aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="text-align:center; color: #FFFFFF; " href="{{ route('sizing_guide') }}">
                                Sizing Guide
                            </a>
                            <a class="dropdown-item" style="text-align:center; color: #FFFFFF;" href="{{ route('shipping') }}">
                                Shipping & Delivery
                            </a>
                            <a class="dropdown-item" style="text-align:center; color: #FFFFFF;" href="{{ route('sizing_guide') }}">
                                Return Policy
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


    {{-- <div class="preloader">
        <div class="loading">
            <div class="spinner-grow" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div> --}}
    <div class="outer-border">
        <div class="box-slider">
                     <div id="custCarousel" class="carousel slide" data-interval="false" align="center">
                        <!-- slides -->
                        <div class="carousel-inner">
                            @foreach ($productDetail as $value )
                                <div class="carousel-item active"> <img style="object-fit: contain; width:100%; height:400px;" src="{{$value->gambar}}"alt=""> </div>
                                @foreach ($value->dataimage as $valuegambar )
                                    <div class="carousel-item"> <img style="object-fit: contain; width:100%; height:400px;" src="{{$valuegambar->product_detail_picture}}" alt=""> </div>  
                                @endforeach 
                            @endforeach
                        </div> 
                        <div class="carousel-indicators list-inline botom-foto" style="padding-top:25px; width:25%; flex-direction:column;">
                            @foreach ($productDetail as $key => $value )
                            <div style="width: 100%" class="list-inline-item active"> <a id="carousel-selector-0" style="width: 100%" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="{{$value->gambar}}"  class="img-fluid"> </a></div>
                                @foreach ($value->dataimage as $key => $valuegambar )
                                    <div style="width: 100%" class="list-inline-item"> <a id="carousel-selector-1" style="width: 100%" data-slide-to="{{$key+1}}" data-target="#custCarousel"> <img src="{{$valuegambar->product_detail_picture}}"  class="img-fluid"> </a> </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
        </div>
        <div class="box-diskripsi">
            @foreach ( $productDetail as $value)
                <h1 class="product-name">{{$value->product_name}}</h1>
                <h5 class="currency">{{$value->price}}</h5>
                <h6 class="color-title" style="padding-top:2%; ">Available Color</h6>
                <div class="color-box" style="display: flex; gap:0.25rem; padding-bottom:3%;">
                    @foreach ($value->datacolor as $warna)
                            <div style="border:solid 1px; background-color:{{$warna->color_name}}; width:25px; height:25px;"></div>
                    @endforeach
                </div>
                <h6 class="color-title" style="padding-top:2%; ">Available Size</h6>
                <div class="color-box" style="display: flex; gap:0.25rem; padding-bottom:3%;">
                    @foreach ($value->datasize as $size)
                            <div style="border:solid 1px; width:25px; height:25px; text-align:center;">{{$size->size}}</div>
                    @endforeach
                </div>
                <h4 class="deskripsi">Description</h4>
                <p class="deskripsi-content">{{$value->description}}</p>
            @endforeach
        </div>
    </div>


    

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('js/accounting.min.js')}}"></script>
<script>
    $(document).ready(function(){
        document.querySelectorAll('.currency').forEach(element => {
                        console.log(document);
                        element.innerHTML = accounting.formatMoney(accounting.unformat(element.innerHTML, ","), "Rp. ", 0, ".", ",")
        });
    })
    function rupiahCurrencyFormat(){
        document.querySelector('.currency')
        console.log( document.querySelector('.currency'));    
    }
    rupiahCurrencyFormat();
    
$('.carousel').carousel({
    interval: false,
});
</script>



</html>