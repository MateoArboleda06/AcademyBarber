<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!--<script src="https://cdn.tailwindcss.com"></script>-->
    <!-- favicon -->
    <!-- estilos -->
</head>

<body>
    <!-- header -->
    <!-- nav -->
    <div class="navbar">
        <a href="{{ route('home') }}"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="{{ route('course.index') }}"><i class="fa fa-fw fa-pencil"></i> Courses</a>
        <a href="{{ route('group.index') }}"><i class="fa fa-fw fa-book"></i> Groups</a>
        <a href="{{route('contactUs.index')}}"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>

    @yield('content')

    <!-- footer -->
    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
    <!-- script -->

</body>

</html>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        background: linear-gradient(0deg, rgba(28, 27, 23) 0%, rgb(255, 255, 255) 100%);
    }

    html {
        box-sizing: border-box;
    }

    /* Style the navigation bar */
    .navbar {
        width: 100%;
        background-color: rgb(30, 30, 30);
        overflow: auto;
    }

    /* Navbar links */
    .navbar a {
        float: left;
        text-align: center;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
    }

    /* Navbar links on mouse-over */
    .navbar a:hover {
        background-color: rgba(164, 120, 93);
    }

    /* Current/active navbar link */
    .active {
        background-color: rgba(164, 120, 93);
    }

    /* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
    @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
        }
    }

    .navbar i {
      color: rgba(164, 120, 93);
    }

    .text-gray-500 {
        color:rgb(255, 255, 255);
    }
</style>
