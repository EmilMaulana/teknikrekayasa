@extends('layouts.main')

@section('content')

{{-- <section class="bg-white dark:bg-gray-800 pt-10">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Your Coding Journey Starts Here.</h1>
        <p class=" text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Platform
            belajar coding online yang komprehensif, dirancang untuk pemula.</p>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Pelajari HTML,
            CSS, JavaScript, PHP dan bahasa pemrograman lainnya dengan tutorial interaktif dan berbasis projek.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Alur Belajar
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</section> --}}


<section
    class="pt-10 pb-10 bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
        <a href="#"
            class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
            <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span
                class="text-sm font-medium">Jumbotron component was launched! See what's new</span>
            <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
        </a>
        <h1
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Your Coding Journey Starts Here.</h1>
        <p class=" text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Platform
            belajar coding online yang komprehensif, dirancang untuk pemula.</p>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Pelajari HTML,
            CSS, JavaScript, PHP dan bahasa pemrograman lainnya dengan tutorial interaktif dan berbasis projek.</p>
        <a href="#"
            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Mulai Belajar
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
    <div
        class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0">
    </div>
</section>

{{-- logo scroll --}}
<section class="bg-white dark:bg-gray-900">
    <div class="logo-container ">
        <div class="logo my-10">
            <img src="{{ asset('assets/img/html.png') }}" alt="html" />
            <img src="{{ asset('assets/img/css.png') }}" alt="css" />
            <img src="{{ asset('assets/img/js.png') }}" alt="js" />
            <img src="{{ asset('assets/img/cplus.png') }}" alt="cplus" />
            <img src="{{ asset('assets/img/python.png') }}" alt="python" />
            <img src="{{ asset('assets/img/php.png') }}" alt="php" />
            <img src="{{ asset('assets/img/laravel.png') }}" alt="laravel" />
            <img src="{{ asset('assets/img/livewire.png') }}" alt="livewire" />
            <img src="{{ asset('assets/img/jetstream.png') }}" alt="jetstream" />
        </div>
        <div class="logo my-10">
            <img src="{{ asset('assets/img/html.png') }}" alt="html" />
            <img src="{{ asset('assets/img/css.png') }}" alt="css" />
            <img src="{{ asset('assets/img/js.png') }}" alt="js" />
            <img src="{{ asset('assets/img/cplus.png') }}" alt="cplus" />
            <img src="{{ asset('assets/img/python.png') }}" alt="python" />
            <img src="{{ asset('assets/img/php.png') }}" alt="php" />
            <img src="{{ asset('assets/img/laravel.png') }}" alt="laravel" />
            <img src="{{ asset('assets/img/livewire.png') }}" alt="livewire" />
            <img src="{{ asset('assets/img/jetstream.png') }}" alt="jetstream" />
        </div>
    </div>
</section>
{{-- logo scroll --}}
{{-- blog section --}}
<section class="bg-gray-50 pt-10 pb-10 antialiased dark:bg-gray-900 md:py-12">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h5 class="mt-5 text-2xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Bacaan
                Terpopuler
            </h5>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test
                assumptions and connect with the needs of your audience early and often.</p>
        </div>
        <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-4">
            <div class="rounded-lg border border-gray-200 bg-white p-3 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="">
                    <img src="https://santrikoding.com/storage/posts/4d35e17d-1865-4eab-887c-7b5fed66529a.webp" alt=""
                        class="rounded-lg">
                </div>
                <div class="pt-4">
                    <div class="mb-4 flex items-center justify-between gap-4">
                        <div class="">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Categories</span>
                        </div>
                        <div class="flex items-center text-white justify-end gap-1">
                            <span class="text-sm">14 days ago</span>
                        </div>
                        <i class="fas fa-eye"></i> <small>300</small>
                    </div>

                    <a href="#"
                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple
                        iMac 27", 1TB HDD, Retina 5K Display, M3 Max</a>
                </div>
            </div>
        </div>
        <div class="w-full text-center">
            <button type="button"
                class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Show
                more</button>
        </div>
    </div>
</section>
{{-- blog section --}}
{{-- <section class="bg-white dark:bg-gray-900 ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h5 class="mb-4 text-2xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Bacaan
                Terpopuler
            </h5>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test
                assumptions and connect with the needs of your audience early and often.</p>
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                        Tutorial
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">How to
                        quickly deploy a static website</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap
                    lots of websites and are becoming the basis for a variety of tools that even influence both web
                    designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="Jese Leos avatar" />
                        <span class="font-medium dark:text-white">
                            Jese Leos
                        </span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span
                        class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                clip-rule="evenodd"></path>
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                        </svg>
                        Article
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Our first
                        project with React</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap
                    lots of websites and are becoming the basis for a variety of tools that even influence both web
                    designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="Bonnie Green avatar" />
                        <span class="font-medium dark:text-white">
                            Bonnie Green
                        </span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section> --}}




@endsection