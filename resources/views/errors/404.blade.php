@extends('layouts.error')

@section('title', 'Product Owner | Expérience')

@section('content')
    <main class=" w-full flex flex-col justify-center items-center bg-[#1A2238] rounded-lg py-20"> 
        <h1 class="text-9xl font-extrabold text-gray-200 tracking-widest">404</h1>
        <div class="bg-n9turquoise px-2 text-lg rounded rotate-12 absolute text-gray-100">
            Page Not Found
        </div>
        <button class="mt-5">
            <a class="relative inline-block text-sm font-medium text-n9turquoise group active:text-sky-500 focus:outline-none focus:ring" href="/">
                
                <span class="relative block px-8 py-3 bg-[#1A2238] border border-current rounded-md">
                    Go Home
                </span>
            </a>
        </button>
    </main>
@endsection
