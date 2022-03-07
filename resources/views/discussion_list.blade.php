@extends('layouts.app')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"
            defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch"
          href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
          rel="stylesheet">

    @yield('css')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">


    <style>
        .btn-info {
            color: #FFF!important;
        }
    </style>
</head>



@section('content')

    <div class="container" style="padding-top:5%; padding-bottom:5%;">
        <div class="row justify-content-space-evenly">
            <div class="col-md-4">
                @auth
                <div class="mb-2">
                    <a href="{{ route('discussion_create') }}"
                        class="btn btn-info btn-block">Create Discussion</a>
                </div>
                @else

                <div class="mb-2">
                    <a href="{{ route('login') }}"
                        class="btn btn-info btn-block">Sign in to discussion</a>
                </div>
                @endauth

                {{-- catagory --}}
                <div class="card">
                    <div class="card-header">Catagory</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($channels as $value)
                                <li class="list-group-item">{{$value->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
    
                <div class=" col-md-8">
                    <div class="d-flex" style="justify-content:flex-end; padding-top:10px;">
                        <input class="border mb-3 mfliud" style="border-radius:5px; width:50%;" type="text" id="search" placeholder="Search.." name="search">
                    </div>
                    @foreach ($discussions as $value )
                    <div class="card col-md-12 list_diskusi" style="padding-bottom:2%; 0; height:100px; ">
                        
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-content-center">
                                <div>
                                    <strong class="ml-2 text-uppercase">{{$value->name}}</strong>
                                </div>
                    
                                <div>
                                    <a href="{{ route('discussion_list') }}"
                                    class="btn btn-success btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                    
                        <div id="title_diskusi" class="card-body">
                            {!! $value->title !!}
                        </div>
                    </div>
                    @endforeach
                </div> 

        </div>
    </div> 
<script>
    	document.getElementById('search').addEventListener('input', function(){
		document.querySelectorAll('.list_diskusi').forEach(function(product){
			if (product.querySelector('#title_diskusi').innerHTML.includes(document.getElementById('search').value)) {
				product.style.display="block";
			}
			else{
				product.style.display="none";
			}
		});

	});
</script>

@endsection