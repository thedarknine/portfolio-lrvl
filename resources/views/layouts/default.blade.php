<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Caroline Noyer | @yield('title', 'Product Owner')</title>

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" >
    <!-- Styles / Scripts -->
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            
        @endif --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-n9darkblue">
    @include('blocks.header')

    @if (Request::getPathInfo() !== '/')
        <div id="{!! str_replace('/', '', Request::getPathInfo()) !!}" class="relative">
            <div class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20" aria-hidden="true">
                <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
                <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
            </div>
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="relative pt-36 ml-auto">
                    <section class="text-gray-300 body-font overflow-hidden">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2">@yield('pagetitle', 'Product Owner')</h1>
                            <div class="h-1 w-20 bg-n9turquoise rounded mb-10"></div>
                        </div>

                        <div class="container px-5 py-12 mx-auto">
                            @yield('content')
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @else
        @yield('content')
    @endif

    <main class="space-y-40 mb-40">
    </main>

    @include('blocks.footer')
</body>

</html>
