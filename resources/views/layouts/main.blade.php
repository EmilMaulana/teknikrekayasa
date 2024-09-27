<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="icon" href="favicon.ico">
    <link href="{{ asset('base/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f1ecbb1f89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/script.js') }}"></script>
    
</head>
{{-- <body class="bg-gray-900" x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"> --}}
    <body
    x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    
    :class="{'b eh': darkMode === true}"
>    
    <!-- ===== Header Start ===== -->
<header class="g s r vd ya cj dark" :class="{ 'hh sm _k dj bl ll' : stickyMenu }" @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
    <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
        <div class="vd to/4 tc wf yf">
            <a href="/">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white">TEKNIK
                    REKAYASA</span>
            </a>

            <!-- Hamburger Toggle BTN -->
            <button class="po rc" @click="navigationOpen = !navigationOpen">
                <span class="rc i pf re pd">
                <span class="du-block h q vd yc">
                    <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
                    <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
                    <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
                </span>
                <span class="du-block h q vd yc lf">
                    <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
                    <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
                </span>
                </span>
            </button>
            <!-- Hamburger Toggle BTN -->
        </div>

        <div class="vd wo/4 sd qo f ho oo wf yf" :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }" >
            <nav>
                <ul class="tc _o sf yo cg ep">
                    {{-- <li><a href="/" class=" text-white active">Home</a></li>
                    <li><a href="/artikel" class="text-white">Artikel</a></li>
                    <li><a href="/kelas" class="text-white">Kelas</a></li> --}}
                </ul>
            </nav>

            <div class="tc wf ig pb no">
                @if (Route::has('login'))
                    @auth
                            <a href="{{ route('dashboard') }}"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fa-solid fa-cubes me-1"></i> Dashboard </a>
                        @else
                            <a href="{{ route('login') }}" type="button"
                                class="block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fas fa-sign-in"></i> Log
                                in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" type="button"
                                class="block focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 mt-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"><i class="fas fa-sign-out"></i> Register</a>
                        @endif
                    @endauth
                @endif
                {{-- <a href="signin.html" :class="{ 'nk yl' : page === 'home', 'ok' : page === 'home' && stickyMenu }" class="ek pk xl">Sign In</a>
                <a href="signup.html" :class="{ 'hh/[0.15]' : page === 'home', 'sh' : page === 'home' && stickyMenu }" class="lk gh dk rg tc wf xf _l gi hi bg-purple-600">Sign Up</a> --}}
            </div>
        </div>
    </div>
</header>

            <!-- ===== Header End ===== -->
    <main>
        @yield('content')
    </main>
            
            <!-- ===== Footer Start ===== -->
    


<footer class=" dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto mt-10 pt-20">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">TEKNIK REKAYASA</span>
            </a>
            {{-- <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul> --}}
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">TEKNIK REKAYASA™</a>. All Rights Reserved.</span>
    </div>
</footer>
            
            
        <!-- ===== Footer End ===== -->

        <!-- ====== Back To Top Start ===== -->
        <button
    class="xc wf xf ie ld vg sr gh tr g sa ta _a"
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
    :class="{ 'uc' : scrollTop }"
    >
    <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
    </svg>
    </button>

    <!-- ====== Back To Top End ===== -->

    <script>
    //  Pricing Table
    const setup = () => {
        return {
        isNavOpen: false,

        billPlan: 'monthly',

        plans: [
            {
            name: 'Starter',
            price: {
                monthly: 29,
                annually: 29 * 12 - 199,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
            {
            name: 'Growth Plan',
            price: {
                monthly: 59,
                annually: 59 * 12 - 100,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
            {
            name: 'Business',
            price: {
                monthly: 139,
                annually: 139 * 12 - 100,
            },
            features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
        ],
        };
    };
    </script>
    <script defer src="{{ asset('base/bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    </body>
</html>
