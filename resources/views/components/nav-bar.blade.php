<nav class="WhiteOnOrange px-4 py-3 flex items-center justify-between">
    <div class="flex space-x-4 items-center">
        <x-logo class="mr-4" />
        <div class="flex items-center">
            <x-table-search class="w-72" />
        </div>
        <x-nav-menu />
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
            <x-profile-dropdown />
        </div>
    </div>
</nav>
