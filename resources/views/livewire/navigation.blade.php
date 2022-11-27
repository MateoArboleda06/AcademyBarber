<nav style="background-color: #202020" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button x-on:click="open = true" type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <!--
              Icon when menu is closed.
  
              Heroicon name: outline/bars-3
  
              Menu open: "hidden", Menu closed: "block"
            -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
              Icon when menu is open.
  
              Heroicon name: outline/x-mark
  
              Menu open: "block", Menu closed: "hidden"
            -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>


            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

                {{-- logotipo --}}
                {{--                 <a href="/" class="flex flex-shrink-0 items-center">
                    <img class="block h-8 w-auto lg:hidden"
                        src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    <img class="hidden h-8 w-auto lg:block"
                        src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </a> --}}
                <a href="/" class="flex flex-shrink-0 items-center">
                    <img class="block h-10 w-auto lg:hidden" src="academ.png" alt="Your Company">
                    <img class="hidden h-10 w-auto lg:block" src="academ.png" alt="Your Company">
                </a>

                {{-- Menu --}}
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('student.index') }}"
                            class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Pensum</a>

                        <a href="{{ route('course.index') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">My
                            Courses</a>

                    </div>
                </div>
            </div>

            @auth

                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    {{-- boton notificacion --}}
                    <button type="button"
                        class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    {{--                     <div class="relative ml-3">
                        <button type="button"
                            class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                            </svg>                            
                        </button>
                    </div> --}}

                    {{--                     <div class="relative ml-3">
                        <button class="switch" id="switch">
                            <span><i class="fa-solid fa-sun"></i></span>
                            <span><i class="fa-solid fa-moon"></i></span>
                        </button>
                    </div> --}}

                    <div class="relative ml-3">
                        <button class="switch" id="switch">
                            <label class="inline-flex relative items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                    <span><i class="fa-solid fa-sun"></i></span>
                                    <span><i class="fa-solid fa-moon"></i></span>
                                </div>
                            </label>
                        </button>
                    </div>



                    <!-- Profile dropdown -->

                    <div class="relative ml-3" x-data="{ open: false }">
                        <div>
                            <button x-on:click="open = true" type="button"
                                class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                    alt="">
                            </button>
                        </div>

                        <div x-show="open" x-on:click.away="open = false"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Admin</a>

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    Sign out
                                </a>
                            </form>

                        </div>
                    </div>
                </div>
            @else
                <div>
                    <a href="{{ route('login') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                </div>

            @endauth

            {{-- <img class="moon cursor-pointer" src="noche.png" alt=""> --}}
            {{-- <img class="sun cursor-pointer display-none" src="./icon-sun.svg" alt=""> --}}
            {{--         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
        </svg> --}}
            {{--         <svg style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
        </svg> --}}


        </div>
    </div>

    <!-- Menu mobil -->
    <div x-show="open" x-on:click.away="open = false" class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                aria-current="page">Pensum</a>

            <a href="{{ route('course.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">My
                Courses</a>
        </div>
    </div>
</nav>

<script>
    const btnSwitch = document.querySelector('#switch');

    btnSwitch.addEventListener('click', () => {
        document.body.classList.toggle('dark');
        btnSwitch.classList.toggle('active');
    });
</script>

<style>
    .switch {
        background: #343D5B;
        border-radius: 1000px;
        border: none;
        position: relative;
        cursor: pointer;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        outline: none;
    }

    .switch::after {
        content: "";
        top: 0;
        left: 0;
        right: unset;
        border-radius: 100px;
        -webkit-transition: .3s ease all;
        transition: .3s ease all;
    }

    .switch.active {
        background: orange;
        color: #000;
    }

    .switch.active::after {
        right: 0;
        left: unset;
    }

    .switch span {
        width: 30px;
        height: 30px;
        line-height: 10px;
        background: none;
        color: #fff;
    }
</style>
