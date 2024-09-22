@extends('layouts.main')

@section('content')

<section class="bg-white dark:bg-gray-900 text-gray-300">
    <div class="container mx-auto py-8 mt-10">
        <div class="row my-10">
            <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <address class="flex items-center mb-3 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                                <div class="ps-4">
                                    <p class="text-md font-bold text-gray-900 dark:text-white">{{ $blog->user->name }}</p>
                                    {{-- <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO Flowbite</p> --}}
                                    <p class="text-base text-gray-500 dark:text-gray-400">{{ $blog->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </address>
                        <a href="/{{ $blog->category->name }}" class="text-base text-gray-500 dark:text-gray-400 ">{{ $blog->category->name }}</a>
                        <h1 class="my-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $blog->title }}</h1>
                    </header>
                    <p class=" text-gray-500 dark:text-gray-400 text-justify">{!! $blog->body !!}</p>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection