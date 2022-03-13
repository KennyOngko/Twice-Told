<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TWICE TOLD') }}</title>



    <!-- Fonts -->

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
        @media (max-width:485px){
            trix-toolbar{
                overflow: scroll !important;
            }
        }
        .box-create-disccuss{
            display: flex; 
            justify-content:center; 
            padding-bottom:5%; 
            padding-top:5%;
        }
        .btn-success{
            background-color: #D2B48C !important; 
            border-color: #D2B48C !important;
        }
    </style>
</head>


    @extends('layouts.app')

    @section('content')
    <div class="box-create-disccuss">
    <div class="card" style="width: 80%;">
        <div class="card-header" style="background-color:antiquewhite;">Add Discussion</div> 
            <div class="card-body" style="background-color:cornsilk; border:solid palegoldenrod;">
                <form  method="post" action="{{ route('makeDiscussion') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title"
                               class="form-control"
                               type="text"
                               name="title" />
                    </div>
        
                    <div class="form-group">
                        <label for="content">Content</label>
        
                        <input id="content"
                               type="hidden"
                               name="content">
                        <trix-editor input="content"></trix-editor>
                    </div>
        
                    <div class="form-group" style="padding-bottom:10px;">
                        <label for="channel">Channel</label>
        
                        <select name="channel"
                                id="channel"
                                class="form-control">
                            @foreach ($channels as $channel)
                            <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <button type="submit"
                            class="btn btn-success">Create Discussion</button>
                </form>
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
    <script defer
        src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js">
    </script>
    @endsection
</body>

</html>