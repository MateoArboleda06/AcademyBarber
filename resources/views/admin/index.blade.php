@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1 class="text-gradient centering">Barber Academy / Admin</h1>
@stop

@section('content')
    <p class="centering">Welcome to this beautiful admin panel.</p>

    <div class="flex items-center justify-center">
        <div {{-- class="max-w bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" --}} class="centering">
            {{-- <img class="rounded-t-lg" src="bacedm.png" alt="" /> --}}
            <img src="academ.png" class="img-fluid rounded-t-lg" alt="barberacademy">
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <style>
        .body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
        }

        .dark {
            background: #1f1f1f;
            color: #f1eded;
            transition: all 1.5s ease;
        }

        .navi {
            background-color: #272727;
        }

        .barber {
            background: rgba(84, 49, 27);
        }

        .back {
            background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
        }

        .centering {
            text-align: center;
        }

        .anime {
            animation-duration: 3s;
            animation-name: slidein;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        .h1 {
            text-shadow:
                3px 3px 1px #272727,
                5px 5px 2px white,
                8px 8px 3px rgba(84, 49, 27);
            ;
        }

        .text-gradient {
            color: transparent;
            background-image: linear-gradient(to left, #272727, #3498db, rgba(84, 49, 27));
            background-clip: text;
            animation: color 5s linear infinite;
            background-size: 500%;
        }

        @keyframes color {
            from {
                background-position: 0% 50%;
            }

            to {
                background-position: 100% 50%;
            }
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
