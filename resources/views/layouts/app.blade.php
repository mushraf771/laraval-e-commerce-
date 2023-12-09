<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- end add styles --}}
     <!-- owl carousel css link -->
     <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.min.css") }}">
     <link rel="stylesheet" href="{{ asset("assets/css/owl.theme.default.min.css") }}">
</head>

<body class=" bg-gray-100" id="demo">
    <nav class="w-full bg-white  dark:bg-gray-900">
        <div class="container max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="/">
                <img src="assets/images/logo.svg" alt="Logo" class="w-32">
            </a>
            <div class="max-w-sm w-full relative hidden md:flex ">
                <span class="absolute left-4 top-2 text-lg text-gray-800">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="text" name="search" id="search"
                    class="w-full border border-primary border-r-0 pl-12 py-2 pr-3 rounded-l-md focus:outline-none"
                    placeholder="search">
                <button
                    class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
            </div>

            <div class="flex  items-center space-x-2 md:space-x-4 ">
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <div class="flex gap-2">
                        <div class="text-xs leading-3">Wishlist</div>
                        <div
                            class="absolute right-0 -top-1  w-4 h-4 md:w-5 md:h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                            8</div>
                    </div>
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="text-xs leading-3">Cart</div>
                    <div
                        class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                        2</div>
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a>
            </div>
        </div>
        </div>
    </nav>
    <!-- /End header -->
    <section class="">
        <div id="overlay"></div>
        <div id="closeBtn" onclick="closeNav()">&times;</div>
        <div class="sidenav" id="mySidenav">
            <div class="sidenavHeader">
                <i class="fas fa-user-circle"> RoyalMad</i>
            </div>
            {{-- below side nav header --}}
            <div class="" id="main-container">
                <div class="sidenavContentHeader">
                    Trending
                </div>
                <a href="#" class="">
                    <div class="sidenavRow">
                        <div class="sidenavContent">Amazon Music</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                <a href="#" class="">
                    <div class="sidenavRow">
                        <div class="sidenavContent">Amazon Music</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                <a href="#" class="">
                    <div class="sidenavRow">
                        <div class="sidenavContent">Amazon Music</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                {{-- end first head --}}
                <hr />
                <div class="sidenavContentHeader">
                    Digital Design and indigo
                </div>
                <a href="#" class="" onclick="openPrimeVideo()">
                    <div class="sidenavRow">
                        <div class="sidenavContent">Digital Des</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                <a href="#" class="">
                    <div class="sidenavRow">
                        <div class="sidenavContent">Amazon Music</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                <a href="#" class="">
                    <div class="sidenavRow">
                        <div class="sidenavContent">2nd Last</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                {{-- first container --}}
                <div class="sidenavContainer" id="firstContainer">
                    <hr />
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                </div>
                <div class="sidenavRowDropdown" id="firstDropDown" onclick="firstDropdown()">
                    <div class="">See All</div>
                    <i class="fas fa-chevron-down ml-[10px] text-[#8e9090]">
                    </i>
                </div>
                <hr />
                {{-- end first   --}}
                <div class="sidenavContentHeader">
                    Programs and features
                </div>
                <a href="#" class="" onclick="openPrimeVideo()">
                    <div class="sidenavRow">
                        <div class="sidenavContent">GO GO</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                <a href="#" class="">
                    <div class="sidenavRow">
                        <div class="sidenavContent">Ruby</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                <a href="#" class="">
                    <div class="sidenavRow">
                        <div class="sidenavContent">Java</div>
                        <i class="fas fa-chevron-right text-[#8e9090]"></i>
                    </div>
                </a>
                {{-- second container --}}
                <div class="sidenavContainer" id="secondContainer">
                    <hr />
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                    <a href="#" class="">
                        <div class="sidenavRow">
                            <div class="sidenavContent">Amazon Music</div>
                            <i class="fas fa-chevron-right text-[#8e9090]"></i>
                        </div>
                    </a>
                </div>
                <div class="sidenavRowDropdown" id="secondDropDown" onclick="secondDropdown()">
                    <div class="">See All</div>
                    <i class="">
                    </i>
                </div>
                <hr />
                {{-- end second contaainer  --}}

                {{-- Help Features section --}}
                <div class="sidenavContentHeader">
                    Help & Settings
                </div>
                <a href="" class="">
                    <div class="sidenavContent">Your Account</div>
                </a>
                <a href="" class="">
                    <div class="sidenavContent">Currency</div>
                </a>
                <a href="" class="">
                    <div class="sidenavContent">Customer Service</div>
                </a>
                <a href="" class="">
                    <div class="sidenavContent">signin</div>
                </a>
                <div class="h-52"></div>

            </div>
            {{-- end main container --}}

            <div id="sub-container">
                <div id="mainMenu">
                    <i class="fas fa-chevron-left" style="color:#8e9090;"></i>
                    Main Menu
                </div>
                <hr />
                <div class="" id="sub-container-content">
                    {{-- <div class="sidenavContentHeader">Prime Video</div>
                <a href="" class="">
                    <div class="sidenavContent">All videos</div>
                </a> --}}
                </div>
            </div>
        </div>
        {{-- end side nav contaner --}}

        {{-- not side nav --}}
    </section>
    <nav class="  dark:bg-gray-900 dark:border-gray-700 bg-black sticky top-0 z-50">
        <div
            class="max-w-screen-xl w-full flex flex-wrap items-center md:justify-start justify-between pl-2 md:pl-0  mx-auto py-2 ">
            <div class=" flex items-center gap-2 cursor-pointer select-none text-[30px] w-5 text-white"
                onclick="openNav()">
                &#9776;
                <span class="text-sm text-center hidden sm:block">All</span>
            </div>

            {{-- navlinks --}}
            <div class=" md:w-auto  md:ml-16" id="menu">
                <ul
                    class="flex flex-wrap max-w-sm gap-x-2 p-1 md:p-2 md:font-medium text-sm md md:space-x-4 md:mt-0 md:text-sm  md:border-0">
                    <li>
                        <a href="{{ url('category') }}"
                            class=" hover:text-primary transition-all delay-75 block  text-white rounded md:bg-transparent md:p-0 md:dark:text-white  md:dark:bg-transparent"
                            aria-current="page">Toda's Deal</a>
                    </li>
                    <li>
                        <a href="{{ url('product') }}"
                            class=" hover:text-primary transition-all delay-75 block  text-white rounded md:bg-transparent md:p-0 md:dark:text-white  md:dark:bg-transparent"
                            aria-current="page">Customer Service</a>
                    </li>
                    <li>
                        <a href="href="{{ url('shop') }}""
                            class=" hover:text-primary transition-all delay-75 block  text-white rounded md:bg-transparent md:p-0 md:dark:text-white  md:dark:bg-transparent"
                            aria-current="page">Gift Cards</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>  
    <!-- Page Content -->
    <main class="m-0 p-0 h-auto">
        {{ $slot }}
    </main>
    <div class="">
        <!-- footer -->
        <footer class=" w-full py-16 px-5 border-t border-gray-100">
            <div class="w-full container  grid grid-col sm:grid-cols-3">
                <div class=" col-span-1 p-2 ">
                    <img src="assets/images/logo.svg" alt="logo" class="w-30">
                    <div class="mr-2">
                        <p class="text-gray-600 mb-2 mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, hic?
                        </p>
                    </div>
                    <div class="flex space-x-6 font-medium ">
                        <a href="#" class="text-gray-600 hover:text-primary transition-all delay-100 text-[30px]"><i
                                class="fa-brands fa-facebook-square"></i></a>
                        <a href="#" class="text-gray-600 hover:text-primary transition-all delay-100 text-[30px]"><i
                                class="fa-brands fa-instagram-square"></i></a>
                        <a href="#" class="text-gray-600 hover:text-primary transition-all delay-100 text-[30px]"><i
                                class="fa-brands fa-twitter-square"></i></a>
                        <a href="#" class="text-gray-600 hover:text-primary transition-all delay-100 text-[30px]">
                            <i class="fa-brands fa-github-square"></i>
                        </a>
                    </div>
                </div>

                <div class="col-span-2 p-4">
                    <div class=" flex gap-8 flex-wrap justify-between items-center">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wider">Solutions</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Marketing</a>
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Analitycs</a>
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Commerce</a>
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Insights</a>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wider">Support</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Pricing</a>
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Documentation</a>
                                <a href="#" class="text-base text-gray-600 hover:text-primary block">Guides</a>
                                <a href="#" class="text-base text-gray-600 hover:text-primary block">API
                                    Status</a>
                            </div>
                        </div>


                        <div>
                            <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wider">Solutions</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Marketing</a>
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Analitycs</a>
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Commerce</a>
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Insights</a>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-gray-800 uppercase tracking-wider">Support</h3>
                            <div class="mt-4 space-y-4">
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Pricing</a>
                                <a href="#"
                                    class="text-base text-gray-600 hover:text-primary block">Documentation</a>
                                <a href="#" class="text-base text-gray-600 hover:text-primary block">Guides</a>
                                <a href="#" class="text-base text-gray-600 hover:text-primary block">API
                                    Status</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ./footer -->

        <!-- copyright -->
        <div class="bg-gray-800 py-4">
            <div class="container flex items-center justify-between">
                <p class="text-white">&copy; ChMushraf Khan &copy; All Right Reserved</p>
                <div>
                    <img src="assets/images/methods.png" alt="methods" class="h-5">
                </div>
            </div>
        </div>
        <!-- ./copyright -->
    </div>
    <script  src="{{ asset("assets/js/jquery.min.js") }}"></script>
    {{-- <script  src="{{ asset("assets/js/extm.js") }}"></script> --}}
    <script  src="{{ asset("assets/js/extm.min.js") }}"></script>
    <script  src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
    <script  src="{{ asset("assets/js/my.js") }}"></script>
@yield('script1')
@yield('script2')
@stack('modals')

@stack('script')
@livewireScripts
</body>

</html>
