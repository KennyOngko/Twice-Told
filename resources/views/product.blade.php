<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      <!-- Styles -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
      <style>
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
        @media (max-width:485px){
            .container-product{
                padding-bottom: 30% !important;
                padding-top:30% !important;
            }
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
                font-size: 2.25rem !important;
            }
            p{
                font-size: 1rem;
            }
            .col-sm-3{
                width: 50% !important;
            }
            .card-img-top{
                height: 200px !important;
            }
        }
        .container-product{
            padding-bottom: 3%;
            padding-top:3%;
        }
        .outer-product-box{
            display: flex;
            justify-content: center;
        }
        .inner-product-box{
            display: flex;
            width: 90%;
            gap: 0.5rem;
            flex-wrap: wrap;
        }
        /* .row{
            --bs-gutter-y:1rem !important;
            --bs-gutter-x:3rem !important;
        } */
        .card-img-top{
            height: 400px;
            object-fit: cover;
        }
        .card-body{
            padding-left: 0 !important;
            margin-left: 1%;
        } */
      </style>
    <title>Product</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="preloader">
        <div class="loading">
            <div class="spinner-grow" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <div class="container container-product">
        <div class="row"> 
            @foreach ($product as $value)
            <div class="col-sm-3">
                <a href="{{route('product_details',['id' => $value->id])}}">
                    <img src="{{$value->gambar}}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$value->product_name}}</h5>
                    <h6 class="currency">{{$value->price}}</h6>
                    <h6>Available Color</h6>
                    <div style="display: flex; gap:0.25rem;">
                        @foreach ($value->datacolor as $warna)
                                <div style="border:solid 1px; background-color:{{$warna->color_code}}; width:25px; height:25px;"></div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach   
        </div>
    </div>    
    @endsection
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('js/accounting.min.js')}}"></script>
<script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
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
</script>
</html>