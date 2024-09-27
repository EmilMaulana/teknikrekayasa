@extends('layouts.main')

@section('content')

<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex flex-col md:flex-row md:space-x-4 items-center justify-center">
                {{-- Kolom 8 --}}
                <div class="flex-grow md:basis-2/3 mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </a>
                </div>

                {{-- Kolom 4 --}}
                <div class="md:basis-1/3 mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Smaller Column Content</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">This is smaller column content, great for sidebar or additional info.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection