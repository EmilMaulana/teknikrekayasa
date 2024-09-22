@extends('layouts.main')

@section('content')

<section
    class="pt-10 pb-10 bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
        <a href="#"
            class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
            <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span
                class="text-sm font-medium">Belajar coding dari dasar</span>
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
            <h5 class="mt-5 text-2xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Bacaan Terpopuler
            </h5>
        </div>
        <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-4">
            {{-- card --}}
            @foreach ($blogs as $item)
                <a href="{{ route('front.post', $item->slug) }}">
                    <div class="rounded-lg border border-gray-200 bg-white p-3 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->category->name }}" class="rounded-lg">
                        </div>
                        <div class="pt-4">
                            <div class="mb-4 flex items-center text-white justify-between gap-4">
                                <span
                                    class=" text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-white">{{ $item->category->name }}</span>
                                <span class="text-sm"><i class="fas fa-eye"></i> 300</span>
                            </div>
                            <h4 class="text-lg font-semibold leading-tight text-gray-900 dark:text-white">
                                {{ $item->title }}
                            </h4>
                        </div>
                        <div class="flex items-center space-x-4 my-5">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="Bonnie Green avatar" />
                            <span class="font-medium dark:text-white">
                                {{ $item->user->name }}
                            </span>
                            <span class="text-sm text-white">{{ $item->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="w-full text-center pt-5">
            <button type="button"
                class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Show
                more</button>
        </div>
    </div>
</section>
{{-- blog section --}}





@endsection