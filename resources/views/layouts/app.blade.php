<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#54a3a1">
        <meta name="msapplication-TileColor" content="#cc5803">
        <meta name="theme-color" content="#fafaff">

        <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans subpixel-antialiased text-floblue-dark text-sm bg-flowhite">
        <!-- Begin orange bar, navigator -->
        <nav class="WhiteOnOrange px-4 py-3 flex items-center justify-between">
            <div class="flex space-x-4 items-center">
                <div class="bg-flowhite rounded-full mr-4">
                    <a href="#"><img src="/img/logo.png" class="h-14 w-auto"></a>
                </div>
                <div class="flex items-center">
                    <svg class="Svg5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" class="SearchBar placeholder-floblue w-72" placeholder="{{ __('Type to search') }}">
                </div>
                <ul class="flex items-center space-x-4">
                    <li class="TopMenuItem hover:text-gray-300"><a href="#">Home</a></li>
                    <li class="TopMenuItem hover:text-gray-300"><a href="#">{{ __('Data') }}</a></li>
                    <li class="TopMenuItem hover:text-gray-300"><a href="#">{{ __('Documentation') }}</a></li>
                    <li class="TopMenuItem hover:text-gray-300"><a href="#">{{ __('API') }}</a></li>
                    <li class="TopMenuItem hover:text-gray-300"><a href="#">{{ __('About') }}</a></li>
                    <li class="TopMenuItem hover:text-gray-300"><a href="#">{{ __('Contact') }}</a></li>
                </ul>
            </div>
            <div class="flex space-x-4 items-center">
                <div class="relative">
                    <a href="#"><svg class="Svg5 hover:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg></a>
                    <div class="absolute bg-floblue-light rounded-full top-0 right-0 w-2 h-2"></div>
                </div>
                <div>
                    <a href="#"><svg class="Svg5 hover:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></a>
                </div>
                <div>
                    <a href="#"><img src="/profile-photos/0Szf4PIidsp68SARjZESsLIlECRXCLKgaCmoc36X.jpg" class="rounded-full w-8" alt="avatar"></a>
                </div>
            </div>
        </nav>
        <!-- End orange bar, navigator -->
        <!-- Begin white bar, breadcrump & statistics -->
        <div class="flex items-center justify-between px-8 py-4 mt-4 ">
            <div class="flex space-x-3 items-center Breadcrumb">
                <div><a href="#" class="hover:text-florange-dark"><svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></a></div>
                <div><a href="#" class="hover:text-florange-dark hover:underline">{{ __('Locations') }}</a></div>
                <div>/</div>
                <div><a href="#" class="hover:text-florange-dark hover:underline">{{ __('Lists') }}</a></div>
            </div>
            <div class="flex space-x-2 items-center shadow-inner">
                <div class="flex ">
                    <button class="ButtonLeft">
                        <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </button>
                    <div class="ButtonRight">
                        <a href="#" class="hover:font-semibold hover:text-florange-dark">330</a>
                    </div>
                </div>
                <div class="flex shadow-inner">
                    <button class="ButtonLeft">
                        <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </button>
                    <div class="ButtonRight">
                        <a href="#" class="hover:font-semibold hover:text-florange-dark">17.483</a>
                    </div>
                </div>
                <div class="flex shadow-inner">
                    <button class="ButtonLeft">
                        <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                    </button>
                    <div class="ButtonRight">
                        <a href="#" class="hover:font-semibold hover:text-florange-dark">1</a>
                    </div>
                </div>
                <div class="flex shadow-inner">
                    <button class="ButtonLeft">
                        <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    <div class="ButtonRight">
                        <a href="#" class="hover:font-semibold hover:text-florange-dark">483</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End white bar, breadcrump & statistics -->

        {{ $slot }}

        <!-- Start footer content, end of page -->
        <footer class="container mx-auto border-t border-florange mt-20 py-10 flex items-center justify-evenly">
            <ul class="flex items-center space-x-12 justify-evenly">
                <li class="text-floblue text-xs">&copy; 2020 <span class="text-floblack">Enter</span><span class="text-blue-700 italic">MI</span></li>
                <li><a href="#" class="FooterText hover:underline">{{ __('Privacy') }}</a></li>
                <li><a href="#" class="FooterText hover:underline">{{ __('Security') }}</a></li>
            </ul>
            <div class="bg-flowhite border border-florange rounded-full">
                <a href="#"><img src="./img/logo.png" class="h-14 w-14"></a>
            </div>
            <ul class="flex items-center space-x-12 justify-evenly">
                <li><a href="#" class="FooterText hover:underline">{{ __('Contact') }}</a></li>
                <li><a href="#" class="FooterText hover:underline">{{ __('API') }}</a></li>
                <li><a href="#" class="FooterText hover:underline">{{ __('About') }}</a></li>
            </ul>
        </footer>
        <!-- End footer content, end of page -->
        @stack('modals')
        @livewireScripts
    </body>
</html>