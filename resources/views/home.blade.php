@extends('layouts.default')

@section('title', 'Product Owner Portfolio')

@section('content')
    <div class="relative">
        <img class="absolute inset-0 w-full h-full object-cover object-top"
            src="https://carolinenoyer.fr/images/volcans-cnoyer.png" width="400" height="500" alt="hero background image">
        <div aria-hidden="true" class="absolute inset-0 w-full h-full bg-purple-900 bg-opacity-30 backdrop-blur-sm"></div>
    </div>


    <!-- Hero Section -->
    <section
        class="flex flex-col min-h-screen bg-slate-600 text-gray-200 bg-center bg-cover bg-blend-overlay bg-fixed bg-gray-400/60"
        style="background-image: url('https://carolinenoyer.fr/images/volcans-cnoyer.png')">

        <!-- Hero Section Content -->
        <div class="flex-1 flex items-center">
            <div class="text-center mx-auto">
                <h1 class="text-6xl font-semibold">Caroline Noyer</h1>
                <p class="font-light text-3xl mt-5">Product Owner</p>
                <div class="border-1 border-red mx-auto mt-5">
                    <div class="rounded-full bg-cyan-500 flex items-center justify-center w-12 h-12 mx-auto">
                        <a href="https://docs.carolinenoyer.fr/pdf/cv-cnoyer-productowner.pdf" title="CV format PDF"
                            class="flex items-center justify-center btn-social">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Hero section --}}
    <div class="relative" id="home">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative pt-36 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <h1 class="text-white font-bold text-5xl md:text-6xl xl:text-6xl">Passionnée par le <span
                            class="text-n9turquoise">digital</span> depuis 2005</h1>
                    <p class="mt-8 text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio incidunt nam
                        itaque sed eius modi error totam sit illum. Voluptas doloribus asperiores quaerat aperiam. Quidem
                        harum omnis beatae ipsum soluta!</p>
                    <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                        <a href="#"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-md before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-base font-semibold text-white">Get started</span>
                        </a>
                        <a href="#"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-md before:border before:border-transparent before:bg-primary/10 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max">
                            <span class="relative text-base font-semibold text-primary dark:text-white">Learn more</span>
                        </a>
                    </div>
                    <div class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between">
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The lowest price</h6>
                            <p class="mt-2 text-gray-500">Some text here</p>
                        </div>
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The fastest on the market</h6>
                            <p class="mt-2 text-gray-500">Some text here</p>
                        </div>
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The most loved</h6>
                            <p class="mt-2 text-gray-500">Some text here</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="mt-12 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6">
               <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                   <img src="./images/clients/microsoft.svg" class="h-12 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
                 </div>
               <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                 <img src="./images/clients/airbnb.svg" class="h-12 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
               </div>
               <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
                 <img src="./images/clients/google.svg" class="h-9 w-auto m-auto" loading="lazy" alt="client logo" width="" height="" />
               </div>
               <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                   <img src="./images/clients/ge.svg" class="h-12 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
                 </div>
                 <div class="p-4 flex grayscale transition duration-200 hover:grayscale-0">
                   <img src="./images/clients/netflix.svg" class="h-8 w-auto m-auto" loading="lazy" alt="client logo" width="" height="" />
                 </div>
               <div class="p-4 grayscale transition duration-200 hover:grayscale-0">
                   <img src="./images/clients/google-cloud.svg" class="h-12 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
               </div>
             </div> --}}
            </div>
        </div>

        {{--<div class="flex overflow-x-auto overflow-y-hidden border-b border-gray-200 whitespace-nowrap dark:border-gray-700">
          <button class="inline-flex items-center h-10 px-2 py-2 -mb-px text-center text-blue-600 bg-transparent border-b-2 border-blue-500 sm:px-4 -px-1 dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
              </svg>
      
              <span class="mx-1 text-sm sm:text-base">
                  Profile
              </span>
          </button>
      
          <button class="inline-flex items-center h-10 px-2 py-2 -mb-px text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:px-4 -px-1 dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
              </svg>
      
              <span class="mx-1 text-sm sm:text-base">
                  Account
              </span>
          </button>
      
          <button class="inline-flex items-center h-10 px-2 py-2 -mb-px text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:px-4 -px-1 dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
      
              <span class="mx-1 text-sm sm:text-base">
                  Notification
              </span>
          </button>
      </div>--}}
    </div>


@stop
