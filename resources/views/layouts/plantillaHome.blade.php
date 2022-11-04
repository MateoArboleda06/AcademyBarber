<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
        <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
    </div>

    @yield('content')

    <!-- footer -->

    <!-- script -->

</body>

</html>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
<<<<<<< HEAD
        background: linear-gradient(0deg, rgb(2, 2, 2) 0%, rgb(255, 255, 255) 100%);
=======
        background: linear-gradient(0deg, rgba(28, 27, 23) 0%, rgb(255, 255, 255) 100%); 
>>>>>>> c4363ca200b11cc008ca94b444cadae8b4721224
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
</style>
