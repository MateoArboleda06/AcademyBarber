<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

    <link href="{{ asset('/style.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('/darkmode.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<body {{-- class="font-sans antialiased" --}}>
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

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <img src="academ.png" alt="Barber Academy">
                </figure>
            </div>
            <div class="box">
                <h2>About Us Page</h2>
                <p>The Barber Academy is an educational platform which simplifies the administrative processes
                    for students on the one hand, and offers students an accessible and flexible e-learning environment
                    on the
                    other</p>
            </div>
            <div class="box">
                <h2>CONTACT US</h2>
                {{--                 <div class="red-social">
                    <a href="https://wa.me/+573016389477" class="fa-brands fa-whatsapp"></a>
                </div> --}}
                <section class="buttons">
                    <a href="https://wa.me/+573016389477" class="fa-brands fa-whatsapp"></a>
                </section>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Barber Academy</b> - All rights reserved.</small>
        </div>
    </footer>

    @stack('modals')

    @livewireScripts


    <script type="text/javascript">
        function changemode() {
            var bodyweb = document.body;
            bodyweb.classList.toggle("dark");
        }
    </script>
</body>

</html>
