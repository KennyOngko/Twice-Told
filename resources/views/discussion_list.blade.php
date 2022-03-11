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

        /* width */
        ::-webkit-scrollbar {
        width: 10px;

        }

        /* Track */
        ::-webkit-scrollbar-track {
        background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #D2B48C ;
        border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #D2B48C ;
        border-radius: 10px;
        }

        .list-group a:hover li, .list-group a:focus li{
            background-color: gray;
            color: white;
        }

        .list-group a .show{
            background-color: gray;
            color: white;
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
                                <a
                                href="@if($category == $value->slug) {{route('discussion_list')}} @else {{route('discussion_list',['category'=>$value->slug])}} @endif"
                                style="text-decoration: none">
                                    <li class="list-group-item @if($category == $value->slug) show @endif">{{$value->name}}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

                <div class=" col-md-8" style="height: 500px; overflow-y:scroll; ">
                    <div class="d-flex" style="justify-content:flex-end; padding-top:10px;">
                        <input class="border mb-3 mfliud" style="border-radius:5px; width:50%;" type="text" id="search" placeholder="Search.." name="search">
                    </div>
                    @foreach ($discussions as $value )
                    <div class="card col-md-12 list_diskusi" style="margin-bottom:2%; 0; height:100px; ">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-content-center">
                                <div>
                                    <strong class="ml-2 text-uppercase">{{$value->name}}</strong>
                                </div>

                                <div>
                                    <a href="{{ route('replies',$value->slug) }}"
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
