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
    <link async
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">

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
            <div class=" col-md" style="height: 500px; overflow-y:scroll; ">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-content-center">
                            <div>
                                <strong class="ml-2 text-uppercase">{{$diskusi->author->name}}</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h1>{!!$diskusi->title!!}</h1>
                        <p>{!!$diskusi->content!!}</p>

                        @auth
                        <div class="card">
                            <div class="card-header">
                                Add a reply
                            </div>

                            <div class="card-body">
                                <form action="{{route('makeReply',$diskusi->slug)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="content" id="content">
                                    <trix-editor input="content"></trix-editor>

                                    <button type="submit" class="btn btn-success btn-sm my-2">Add Reply</button>
                                </form>
                            </div>
                        </div>
                        @else
                        <a href="{{ route('login') }}"
                            class="btn btn-info">Sign in to add a reply</a>
                        @endauth
                    </div>
                </div>

                @foreach($replies as $reply)
                <div class="card my-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-content-center">
                            <div>
                                <strong class="ml-2 text-uppercase">{{$reply->owner->name}}</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p>{!!$reply->content!!}</p>
                    </div>
                </div>
                @endforeach

                {{ $replies->links() }}
            </div>
        </div>
    </div>
<script>
    // document.getElementById('search').addEventListener('input', function(){
	// 	document.querySelectorAll('.list_diskusi').forEach(function(product){
	// 		if (product.querySelector('#title_diskusi').innerHTML.includes(document.getElementById('search').value)) {
	// 			product.style.display="block";
	// 		}
	// 		else{
	// 			product.style.display="none";
	// 		}
	// 	});
	// });
</script>
<script defer
    src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js">
</script>

@endsection
