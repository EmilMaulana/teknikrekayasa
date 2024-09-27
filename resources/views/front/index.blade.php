@extends('layouts.main')

@section('content')



<section class="gj do ir hj sp jr i -pb-20">
    <!-- Hero Images -->
    <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
        <div class="ms-10 ps-10 pt-20 animate_left jn/10">
            <img src="{{ asset('assets/img/hero.png') }}" alt="Woman" class="h ps-10 pt-20"/>
        </div>
    </div>

    <!-- Hero Content -->
    <div class="bb ze ki xn 2xl:ud-px-0">
        <div class="tc _o">
            <div class="animate_left jn/2">
            <h1 class="fk vj zp or kk wm wb">Platform
                belajar coding online yang dirancang untuk pemula.</h1>
            <p class="text-gray-400">
                Pelajari HTML,
            CSS, JavaScript, PHP dan bahasa pemrograman lainnya dengan tutorial interaktif dan berbasis projek.
            </p>

            <div class="tc tf yo zf mb">
                <a href="#" class="ek jk lk gh gi hi rg ml il vc _d _l bg-purple-700">Mulai Belajar</a>
            </div>
            </div>
        </div>
        </div>
</section>

<section class="">
    {{-- <h2 class="-mt-10 mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-white md:text-4xl">Tutorial Tersedia</h2> --}}
    <div class="logo-container ">
        <div class="logo">
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
        <div class="logo">
            {{-- <img src="{{ asset('assets/img/html.png') }}" alt="html" /> --}}
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

{{-- card --}}

<section class=" pt-10 pb-10 antialiased dark:bg-gray-900 md:py-12">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <!-- Heading & Filters -->
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h5 class="pt-10 text-2xl lg:text-4xl tracking-tight font-extrabold text-white">
                Bacaan Terbaru 
            </h5>
        </div>
        <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-4">
            <!-- Blog Item -->
            @foreach ($blogs as $item)
            <div class="animate_top sg vk rm xm">
                <div class="c rc i z-1 pg p-3">
                    <img class="w-full rounded-lg" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->category->name }}"/>
                    <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                    <a href="{{ route('front.post', $item->slug) }}" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                    </div>
                </div>
                <div class="px-5 py-3">
                    <div class="tc uf wf ag jq">
                        <div class="tc wf ag">
                            <img src="{{ asset('base/images/icon-man.svg') }}" alt="User" />
                            <p>{{ $item->user->name }}</p>
                        </div>
                        <div class="tc wf ag">
                            <img src="{{ asset('base/images/icon-calender.svg') }}" alt="Calender" />
                            <p>{{ $item->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <h4 class="ek tj ml il kk wm xl eq lb">
                    <a href="{{ route('front.post', $item->slug) }}">{{ $item->title }}</a>
                    </h4>
                </div>
            </div>
            @endforeach
            {{-- blog item --}}
        </div>
    </div>
</section>
@endsection