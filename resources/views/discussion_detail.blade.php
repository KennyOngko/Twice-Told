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
                            {{-- @foreach ($channels as $value) --}}
                                <li class="list-group-item"></li>
                            {{-- @endforeach --}}
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class=" col-md-8" style="height: 500px; overflow-y:scroll; ">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-content-center">
                            <div>
                                <img style="width: 49px; height: 49px;"
                                     class="rounded-circle"
                                     alt="" />
                                <strong class="ml-2 text-uppercase"></strong>
                            </div>
                
                            <div>
                                <a href=""
                                   class="btn btn-success btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <h1></h1>
                
      
                    </div>
                </div>
                
                {{-- @foreach($replies as $reply) --}}
                <div class="card my-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-content-center">
                            <div>
                                <strong class="ml-2 text-uppercase"></strong>
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                    </div>
                </div>
                {{-- @endforeach --}}
                
                {{-- {{ $replies->links() }} --}}
                
                @auth
                <div class="card">
                    <div class="card-header">
                        Add a reply
                    </div>
                
                    <div class="card-body">
                        <form action=""
                              method="post">
                            @csrf
                            <input type="hidden"
                                   name="content"
                                   id="content">
                            <trix-editor input="content"></trix-editor>
                
                            <button type="submit"
                                    class="btn btn-success btn-sm my-2">Add Reply</button>
                        </form>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}"
                   class="btn btn-info">Sign in to add a reply</a>
                @endauth
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