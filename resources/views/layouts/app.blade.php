<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div {{-- class="min-h-screen bg-gray-100" --}}>

        @livewire('navigation')

        <!-- Page Content -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="to-blue-500 overflow-hidden shadow-xl sm:rounded-lg">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>

<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
            modeText.innerText = "Light mode";
        } else {
            modeText.innerText = "Dark mode";

        }
    });
</script>

<style>
    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
    }

    html {
        box-sizing: border-box;
    }

    .card {
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
        margin: 100px;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        /* background-color: #474e5d; */
        background: linear-gradient(0deg, rgb(255, 255, 255) -60%, rgb(84, 49, 27) 50%, rgb(255, 255, 255) 150%);
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 100px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em
    }

    /*Styles Cards*/
    .cards {
        position: relative;
        width: 400px;
        height: 400px;
        margin: 100px;
    }

    .cards .face {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
        overflow: hidden;
        transition: .60s;
    }

    .cards .front {
        transform: perspective(600px) rotateY(0deg);
        box-shadow: 0 5px 10px #000;
    }

    .cards .front img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cards .front h3 {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 45px;
        line-height: 45px;
        color: #fff;
        background: rgba(0, 0, 0, .4);
        text-align: center;
    }

    .cards .back {
        transform: perspective(600px) rotateY(180deg);
        background: linear-gradient(0deg, rgba(164, 120, 93) 0%, rgba(28, 27, 23) 100%);
        padding: 15px;
        color: #f3f3f3;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
        box-shadow: 0 5px 10px #000;
    }

    .cards .back .link {
        border-top: solid 1px #f3f3f3;
        height: 50px;
        line-height: 50px;
    }

    .cards .back .link a {
        color: #f3f3f3;
    }

    .cards .back h3 {
        font-size: 30px;
        margin-top: 20px;
        letter-spacing: 2px;
    }

    .cards .back p {
        letter-spacing: 1px;
    }

    .cards:hover .front {
        transform: perspective(600px) rotateY(180deg);
    }

    .cards:hover .back {
        transform: perspective(600px) rotateY(360deg);
    }
</style>
