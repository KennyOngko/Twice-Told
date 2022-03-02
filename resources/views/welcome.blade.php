<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
              @font-face {
                src: url('/fonts/Cardo-Regular.ttf');
                font-family: "custom-font";
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
            .content-home1{
                font-size: 2rem;
                text-align: center;
                padding-top: 10px;
                margin: 2%;
            }
            .content-home2{
                font-size: 1.25rem;
                max-width: 100%;
                text-align: center;
            }
            .break1{
                max-width: 100%;
                color: black;

            }
            .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40.25rem;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: grey;
            }
            .container-img:hover .overlay {
                opacity: 0.5;
            }

            .text {
            color: black;
            font-size: 5rem;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            }
            * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            }

            /* section {
                width: 100%;
                min-height: 100vh;
            } */
            div{
                padding: 0;
                margin: 0;
            }
            .scroll-down {
                height: 50px;
                width: 30px;
                border: 2px solid black;
                position: relative;
                left: 50%;
                bottom: 20px;
                border-radius: 50px;
                cursor: pointer;
            }
            .scroll-down::before,
            .scroll-down::after {
                content: "";
                position: absolute;
                top: 20%;
                left: 50%;
                height: 10px;
                width: 10px;
                transform: translate(-50%, -100%) rotate(45deg);
                border: 2px solid black;
                border-top: transparent;
                border-left: transparent;
                animation: scroll-down 1s ease-in-out infinite;
            }
            .scroll-down::before {
            top: 30%;
            animation-delay: 0.3s;
            /* animation: scroll-down 1s ease-in-out infinite; */
            }

            @keyframes scroll-down {
                0% {
                    /* top:20%; */
                    opacity: 0;
                }
                30% {
                    opacity: 1;
                }
                60% {
                    opacity: 1;
                }
                100% {
                    top: 90%;
                    opacity: 0;
                }
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
            .overflow-scroll {
            -ms-overflow-style: none; /* for Internet Explorer, Edge */
            scrollbar-width: none; /* for Firefox */
            overflow-y: scroll;
            }

            .overflow-scroll::-webkit-scrollbar {
            display: none; /* for Chrome, Safari, and Opera */
            }
            .card-box-content-section2{
                width: 18rem;
            }
            .box-section-2{
                    max-width: 50%;
                }
            .img-section-2{
                max-width: 50%;
            }
            .box-2-bottom-img{
                width:100%;
                height:20rem;
            }
            .row{
                --bs-gutter-x:0.5rem !important;
            }
            @media (max-width:400px){
                section{
                    min-height:50vh;
                }
                .content-home1{
                    font-size: 18pt;
                    margin: 2%;
                }
                .scroll-down{
                    bottom: 5px;
                }
                h1{
                    font-size: 12pt !important;
                    padding: 8%;
                }
                h2{
                    font-size: 10pt !important;
                }
                .content-section-2{
                    flex-direction:column-reverse;
                }
                .box-section-2{
                    max-width: 100%;
                }
                .img-section-2{
                    max-width: 100%;
                }
                .content-section-2-card{
                    justify-content:space-evenly;
                    width:100%;
                    flex-wrap:wrap;
                }
                .card-box-content-section2{
                    width: 12rem;
                }
                .content-2-img-bottom{
                    width: 50% !important;
                    padding: 2px;
                }
                .text{
                    top: 20%;
                }
                .img-welcome{
                    height: 15rem !important;
                }
            }
      
        </style>
    </head>
    <body class="antialiased">
        @extends('layouts.app')

        @section('content')
        <div class="preloader">
            <div class="loading">
                <div class="spinner-grow" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        {{-- section 1 --}}
        <section id="sec-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="max-height: 40.25rem; overflow:hidden; width:100%;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="" class="container-img" >
                            <img src="img/test4.jpg" style="height: 40.25rem; width:100%; object-fit:cover;" class="d-block img-welcome" alt="...">
                            <div class="overlay">
                                <div class="text">More</div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="" class="container-img" >
                            <img src="img/test.jpg" style="height: 40.25rem; width:100%; object-fit:cover;" class="d-block img-welcome" alt="...">
                            <div class="overlay">
                                <div class="text">More</div>
                            </div>
                        </a>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev" >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <p class="content-home1" style="padding-bottom:10px; ">"World has told you once , but i don't mind telling you Twice"</p>
            {{-- <hr class="break1"> --}}
            <a href="#sec-2"  >
                <div class="scroll-down"></div>
            </a>
        </section>
        
        {{-- section dua --}}
        <section id="sec-2" style="padding-bottom:10px; ">
            <div class="d-flex justify-content-center content-section-2" style="width: 100%">
                <div class="overflow-scroll box-section-2">
                        <div>
                            <h1 style="text-align:center; padding-bottom:1%; ">Hi, From TWICE - TOLD</h1>
                        </div>
                        <div style="  padding-left:10%;padding-right:10%">
                            <h2 style="text-align: justify; font-size:1.5rem; width:100%;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam dolorem vero omnis,
                                autem eos aliquam magnam eum iusto laborum. Beatae rerum ratione aut maxime nulla praesentium sunt architecto laudantium tenetur? Lorem ipsum dolor,
                                sit amet consectetur adipisicing elit. Cumque vitae labore nisi dolor error esse consequatur
                                molestias eos harum numquam, nobis, enim nesciunt quam earum fuga necessitatibus. Necessitatibus, iure minus. Lorem ipsum dolor sit amet consectetur
                                 adipisicing elit. Sed, debitis assumenda! Dolorum delectus quaerat quia,
                                aspernatur eos repellendus quis harum neque voluptate tempore, ut molestiae obcaecati ad, aliquid quae similique.
                            </h2>
                        </div>
        
                </div>
                <div class="img-section-2"><img style="width: 100%; height:100%; " src="img/test.jpg" alt=""></div>
            </div>
            <hr style="margin-top:0; color:black;">
            <div style=" display:flex; justify-content:space-evenly; width: 100%; padding-bottom:1%;" class="content-section-2-card" >
                <div class="card card-box-content-section2" >
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card card-box-content-section2" >
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card card-box-content-section2" >
                    <div class="card-body">
                      <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card card-box-content-section2">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <hr style="margin-top:0; color:black;">
            <div style="display: flex; justify-content:center;" class="content-home2">
                <p>Take a look from our instagram</p>
            </div>
            <div style="display: flex; justify-content:center; margin-top:0;" class="content-home2">
                <p>@twicetold.kids #twicetold</p>
            </div>

            <div class="row " style="width: 100%; padding-left:10px;">
                <div class="col-sm-3 content-2-img-bottom" style="object-fit:cover;">
                    <img src="img/test.jpg" style="width: 100%; height:100%;" alt="...">
                </div>
                <div class="col-sm-3 content-2-img-bottom" >
                    <img src="img/test.jpg" style="width: 100%; height:100%; " alt="...">
                </div>
                <div class="col-sm-3 content-2-img-bottom" >
                    <img src="img/test.jpg" style="width: 100%; height:100%; " alt="...">
                </div>
                <div class="col-sm-3 content-2-img-bottom" >
                    <img src="img/test.jpg" style="width: 100%; height:100%; " alt="...">
                </div>
            </div>
        </section>

    @endsection
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
        $(".preloader").fadeOut();
        })
    </script>
</html>
