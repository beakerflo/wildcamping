<nav x-data="{ open: false }" class="WhiteOnOrange">
    <div class="flex justify-between items-center px-4 py-3">
        <div class="flex space-x-4 items-center">
            <x-logo class="md:mr-4" />
            <div class="flex items-center">
                <x-table-search class="w-72 hidden md:block" />
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
                <x-nav-menu-item name="Home" route="pages.home" />
                <x-nav-menu-item name="Data" route="pages.data" />
                <x-nav-menu-item name="Documentation" route="pages.documentation" />
                <x-nav-menu-item name="API" route="pages.home" />
                <x-nav-menu-item name="Services" route="pages.home" />
                <x-nav-menu-item name="About" route="pages.about" />
                <x-nav-menu-item name="Contact" route="pages.contact" />
            </ul>
        </div>
        <div class="flex space-x-4 items-center">
            <div class="relative">
                <a href="#" class="hover:text-gray-300"><x-svg-picker subject="bell" size=6 /></a>
                <div class="absolute bg-floblue-light rounded-full top-0 right-0 w-2 h-2"></div>
            </div>
            <div>
                <a href="#" class="hover:text-gray-300"><x-svg-picker subject="plus" size=6 /></a>
            </div>
            <div>
                <x-profile-dropdown />
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden w-full bg-gray-100 text-floblue-dark" >
        <div class="ml-8 absolute z-50 mt-2 w-48 rounded-md">
            <ul class="bg-flowhite pb-6 container items-center w-48 ml-8 mr-auto border border-1 border-gray-300 space-y-3 overflow-visible rounded-md shadow-lg transition duration-150 ease-in-out">
                <x-nav-menu-item name="Home" route="pages.home" class="px-6 pt-4 pb-2" />
                <x-nav-menu-item name="Data" route="pages.data" class="px-6 py-2" />
                <x-nav-menu-item name="Documentation" route="pages.documentation" class="px-6 py-2" />
                <x-nav-menu-item name="API" route="pages.home" class="px-6 py-2" />
                <x-nav-menu-item name="Services" route="pages.home" class="px-6 py-2" />
                <x-nav-menu-item name="About" route="pages.about" class="px-6 py-2" />
                <x-nav-menu-item name="Contact" route="pages.contact" class="px-6 py-2" />
            </ul>
        </div>
    </div>
</nav>
