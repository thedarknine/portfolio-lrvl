<footer class="py-20 md:py-40">
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="m-auto md:w-10/12 lg:w-8/12 xl:w-6/12">
            <div class="flex flex-wrap items-center justify-between md:flex-nowrap text-sm ">
                <div class="flex w-full justify-center space-x-12 text-gray-500 sm:w-7/12 md:justify-start">
                    <ul class="list-inside list-none space-y-8">
                        <li><a class="transition hover:text-n9turquoise" href="/">Home</a></li>
                        @foreach ($listOfPages as $page)
                        <li><a class="transition hover:text-n9turquoise" href="{{ $page->path }}">{{ $page->title }}</a></li>
                        @endforeach
                    </ul>
        
                    <ul class="space-y-8" role="list">
                        @foreach ($socialLinks as $link)
                        <li>
                            <a class="flex items-center space-x-3 transition hover:text-n9turquoise" href="{{ $link->path }}">
                                @svg($link->icon, 'w-5')
                                <span>{{ $link->title }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            <div class="mx-auto my-0 w-10/12 space-y-6 text-center sm:mt-auto sm:w-5/12 sm:text-left">
                <span class="block text-gray-500 dark:text-gray-400">We change the way UI components librairies are used</span>
    
                <span class="block text-gray-500 dark:text-gray-400">Tailus Blocks &copy; <span id="year"></span></span>
    
                <span class="flex justify-between text-gray-600 dark:text-white">
                    <a class="font-medium" href="#">Terms of Use </a>
                    <a class="font-medium" href="#"> Privacy Policy</a>
                </span>
    
                <span class="block text-gray-500 dark:text-gray-400">Need help? <a class="font-semibold text-gray-600 dark:text-white" href="#"> Contact Us</a></span>
            </div>
            </div>
        </div>
    </div>
</footer>