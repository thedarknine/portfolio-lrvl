<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Caroline Noyer | @yield('title', 'Product Owner')</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Styles / Scripts -->
        {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            
        @endif --}}

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-900">
        @include('blocks.header')
        
        
            @yield('content')
            <main class="space-y-40 mb-40">
        </main>
        
        @include('blocks.footer')
    </body>
</html>