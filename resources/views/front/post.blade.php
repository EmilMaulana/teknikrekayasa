@extends('layouts.main')

@section('content')

<section class="bg-white text-gray-300">
    <div class="container mx-auto py-8 mt-10">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex flex-col md:flex-row md:space-x-4 items-center justify-center mt-4">
                <div class="flex-grow md:basis-2/3 mb-6 font-medium">
                        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                            <header class="mb-4 lg:mb-6 not-format">
                                <address class="flex items-center mb-3 not-italic">
                                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                                        <div class="ps-4">
                                            <p class="text-md font-bold text-white">{{ $blog->user->name }}</p>
                                            <p class="text-sm text-white">{{ $blog->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </address>
                                <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">{{ $blog->category->name }}</span>
                                {{-- <a href="/{{ $blog->category->name }}" class="text-base text-gray-500 dark:text-gray-400 ">{{ $blog->category->name }}</a> --}}
                                <h1 class="my-4 text-3xl font-extrabold leading-tight ">{{ $blog->title }}</h1>
                                <div>
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="rounded-lg w-500" alt="{{ $blog->category->name }}">
                                </div>
                            </header>
                            <p class="text-dark text-justify">{!! $blog->body !!}</p>
                        </article>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection