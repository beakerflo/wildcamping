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
