<nav x-data="{ open: false, propen: false }" class="WhiteOnOrange">

    <div class="flex justify-between items-center px-4 py-3">
        <div class="flex space-x-4 items-center">
            <x-logo class="md:mr-4" />
            <div class="flex items-center">
                <x-table-search-bar class="w-72 hidden md:block" />
            </div>
            <div class="block md:hidden items-center">
                <button @click="open = ! open" class="rounded-full inline-flex items-center justify-center p-2 hover:text-gray-300 focus:outline-none focus:bg-flowhite focus:text-florange transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="hidden md:flex items-center space-x-3">
                <x-nav-menu-item item="Home" route="pages.home" />
                <x-nav-menu-item item="Data" route="data.overview" />
                <x-nav-menu-item item="Documentation" route="pages.documentation" />
                <x-nav-menu-item item="API" route="pages.home" />
                <x-nav-menu-item item="Services" route="pages.home" />
                <x-nav-menu-item item="About" route="pages.about" />
                <x-nav-menu-item item="Contact" route="pages.contact" />
            </ul>
        </div>
        <div class="flex space-x-4 items-center">
            <livewire:notification-menu>

            @if(Auth::check())
                <a href="#" class="hover:text-gray-300"><x-svg-picker subject="plus" size=6 /></a>
            @endif

            <livewire:profile-menu>
        </div>
    </div>

    <div @click.away="open = false" :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden w-full">
        <div class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-left left-10">
            <div class="rounded-md shadow-xs py-1 bg-flowhite">
                <x-drop-down-menu-item item="Home" route="pages.home" />
                <x-drop-down-menu-item item="Data" route="data.overview" />
                <x-drop-down-menu-item item="Documentation" route="pages.documentation" />
                <x-drop-down-menu-item item="API" route="pages.home" />
                <x-drop-down-menu-item item="Services" route="pages.home" />
                <x-drop-down-menu-item item="About" route="pages.about" />
                <x-drop-down-menu-item item="Contact" route="pages.contact" />
            </div>
        </div>
    </div>

</nav>
