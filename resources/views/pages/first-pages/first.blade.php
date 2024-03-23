@extends('layouts.custome')

{{-- MY HTML --}}
@section('myown')

{{-- JumboTron --}}
<section class="bg-center bg-no-repeat bg-[url('/assets/img/jumbotron.jpg')] bg-gray-700 bg-blend-multiply h-screen flex items-center justify-center md:justify-center sm:justify-center">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56 select-none">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Welcome To My Creative World</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Explore my portfolio, discover innovative design projects, and dive into UI/UX creations. Let's journey through creativity!</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="/portfolio" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                View Portfolio
                <i class="bi bi-arrow-right-circle ms-2"></i>
            </a>
            <a href="/article" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Explore Articles
            </a>  
        </div>
    </div>
</section>



@endsection