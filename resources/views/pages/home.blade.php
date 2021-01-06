<x-app-layout title="{{ __($title) }}">
        <!-- Begin title bar, for lists -->
        <div>
            <ul class="flex items-center px-8 mt-4 border-b space-x-4 PrimaryBorderColor">
                <li class="TitleBarItem space-x-2 hover:border-gray-400">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <div><a href="#" class="hover:text-floblue">{{ __('Sources') }}</a></div>
                </li>
                <li class="TitleBarItem TitleBarItemActive space-x-2">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <div><a href="#" class="hover:text-floblue">{{ __('Locations') }}</a></div>
                </li>
                <li class="TitleBarItem space-x-2 hover:border-gray-400">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    <div><a href="#" class="hover:text-floblue">{{ __('Favorites') }}</a></div>
                </li>
                <li class="TitleBarItem space-x-2 hover:border-gray-400">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                    <div><a href="#" class="hover:text-floblue">{{ __('Visits') }}</a></div>
                </li>
                <li class="TitleBarItem space-x-2 hover:border-gray-400">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <div><a href="#" class="hover:text-floblue">{{ __('Images') }}</a></div>
                </li>
              </ul>
        </div>
        <!-- End title bar, for lists -->
        <!-- Begin list content, for lists -->

            <livewire:locations-table>

        <!-- End list content, for lists -->
</x-app-layout>
