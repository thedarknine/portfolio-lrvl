<header>
    <nav id="header" class="fixed z-40 w-full">
        <div class="container m-auto px-6 md:px-12 lg:px-7">
            <div class="flex flex-wrap items-center justify-between py-6 gap-6 md:py-4 md:gap-0 relative">
                <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
                <div class="w-full flex justify-between md:w-max md:px-0">
                    <a href="/" aria-label="logo">
                        <img src="images/global/logo-cnoyer-full-250-white.svg" class="w-36 grayscale contrast-50" width="144" height="68">
                    </a>

                    <div class="flex items-center md:hidden max-h-10">
                        <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative z-40 px-2 py-3 sm:-mr-6">
                            <div id="line"
                                class="m-auto h-0.5 w-6 rounded bg-gray-300 transition duration-300"></div>
                            <div id="line2"
                                class="m-auto mt-2 h-0.5 w-6 rounded bg-gray-300 transition duration-300">
                            </div>
                        </label>
                    </div>
                </div>

                <label role="button" for="toggle_nav" class="fixed w-full z-30 h-full top-0 left-0 bg-gray-700 bg-opacity-40 hidden peer-checked:block md:peer-checked:hidden"></label>

                <div class="flex z-50 flex-col md:flex-row justify-center 
                        items-center gap-y-4 p-6 bg-gray-800 md:w-8/12 
                        md:gap-y-4 md:p-0 
                        md:bg-transparent lg:w-7/12 fixed top-0 -left-full transition-all duration-500 peer-checked:left-0 max-w-sm h-full 
                        md:left-0 md:h-auto w-4/5 md:max-w-none md:relative lg:first-letter:top-0">
                    <div class="flex md:hidden w-full pb-5">
                        <a href="#" aria-label="logo">
                            <img src="images/logo.svg" class="w-36 grayscale contrast-200" alt="tailus logo" width="144" height="68">
                        </a>
                    </div>
                    <div class="block w-full h-full md:h-auto">
                        <ul class="space-y-8 tracking-wide font-medium md:flex md:space-y-0 justify-end">
                        @foreach ($listOfPages as $page)
                            <li>
                                @if(Request::getPathInfo() === '/'.$page->path)
                                <a href="{{ $page->path }}" class="block md:px-3">
                                    <div class="relative text-sky-500
                                                before:absolute before:-inset-2 before:w-full before:h-0.5 before:origin-left before:mx-auto before:mt-auto before:rounded-full before:bg-sky-700">
                                        <span>{{ $page->title }}</span>
                                    </div>
                                </a>
                                @else
                                <a href="{{ $page->path }}" class="block md:px-3 group">
                                    <div class="relative text-gray-300
                                                before:absolute before:-inset-2 before:w-full before:h-0.5 before:origin-left before:mx-auto before:mt-auto before:rounded-full before:bg-sky-700 
                                                before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                        <span class="transition text-gray-200 group-hover:text-sky-500">{{ $page->title }}</span>
                                    </div>
                                </a>
                                @endif
                            </li>
                        @endforeach
                        </ul>
                    </div>

                    {{--<div class="w-full gap-y-4 md:w-max md:gap-y-0 md:gap-x-4 flex md:flex-row flex-col">
                        <button type="button" title="Start buying" class="group w-full py-3 px-6 text-center transition active:bg-yellow-800 focus:bg-yellow-900 sm:w-max">
                            <span class="block text-gray-300 font-semibold group-focus:text-yellow-100">
                                Login
                            </span>
                        </button>
                        <button type="button" title="Start buying" class="w-full py-3 px-6 text-center transition bg-gray-700 hover:bg-gray-800 active:bg-gray-700 focus:bg-gray-800 md:w-max rounded-md">
                            <span class="block text-white font-semibold">
                                Shop now
                            </span>
                        </button>
                    </div>--}}
                </div>
            </div>
        </div>
    </nav>
                                   
</header>