<nav class="WhiteOnOrange px-4 py-3 flex items-center justify-between">
    <div class="flex space-x-4 items-center">
        <x-logo class="mr-4" />
        <div class="flex items-center">
            <x-table-search class="w-72 hidden md:block" />
        </div>
        <ul class="hidden md:flex items-center space-x-4">
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
</nav>
