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
        <div class="container my-8 mx-auto mt-16 flex">
            <div class="w-2/3 mr-6">
                <div class="flex justify-between mb-4 items-center">
                    <div class="flex items-center">
                        <svg class="Svg5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <input type="text" class="SearchBar placeholder-floblue shadow w-60" placeholder="{{ __('Type to search') }}">
                    </div>
                    <button class="text-florange hover:text-floblue lowercase px-2 py-1 rounded-md shadow flex space-x-1">
                        <svg class="Svg5 hover:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>{{ __('New') }}</div>
                    </button>
                </div>
                <div class="rounded-md rounded-b-none border-b-0 border PrimaryBorderColor font-semibold items-start">
                    <div class="TableHeader">
                        <div class="w-3/12 flex space-x-3 items-start">
                            <div class="w-5"> </div>
                            <div>
                                {{ __('Type') }}
                            </div>
                        </div>
                        <div class="w-2/12">
                            {{ __('Source') }}
                        </div>
                        <div class="w-5/12">
                            {{ __('Name') }}
                        </div>
                            <div class="w-1/12 text-right"></div>
                            <div class="w-1/12 text-right"></div>
                        </div>
                    </div>
                <div class="border PrimaryBorderColor rounded-md rounded-t-none divide-y divide-gray-300">
                    <div class="TableRow hover:bg-gray-200">
                        <div class="w-3/12 flex space-x-3 items-center">
                            <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
                            <div>Wildkamperen</div>
                        </div>
                        <div class="w-2/12">
                            Zelf
                        </div>
                        <div class="w-5/12">
                            Het vieze meertje
                        </div>
                        <div class="w-1/12 flex items-center">
                            <svg class="Svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2"><path fill="#ED2939" d="M0 0h3v2H0z"/><path fill="#fff" d="M0 0h2v2H0z"/><path fill="#002395" d="M0 0h1v2H0z"/></svg>
                        </div>
                        <div class="w-1/12 space-x-2 items-center">
                            <button class="hover:text-florange">
                                <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                            </button>
                            <button class="text-red-600 hover:text-floblue-light font-bold">
                                <svg class="Svg4" fill="red" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </button>
                        </div>
                    </div>
                    <div class="TableRow hover:bg-gray-200">
                        <div class="w-3/12 flex space-x-3 items-center">
                            <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <div>Camping</div>
                        </div>
                        <div class="w-2/12">
                            Offroadboyz
                        </div>
                        <div class="w-5/12">
                            Halliru
                        </div>
                        <div class="w-1/12 flex items-center">
                            <svg class="Svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 450 390">
                                <rect fill="#ED2939" width="450" height="390"/>
                                <rect fill="#FAE042" width="300" height="390"/>
                                <rect width="150" height="390"/>
                                </svg>
                        </div>
                        <div class="w-1/12 space-x-2 items-center">
                            <button class="hover:text-florange">
                                <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                            </button>
                            <button class="hover:text-red-600 text-floblue-light font-bold">
                                <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 border PrimaryBorderColor rounded-md shadow-md p-2">
                <div class="flex justify-end mb-4 items-center space-x-2">
                    <button class="py-1 hover:text-florange">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                    </button>
                    <button class="text-red-600 hover:text-floblue font-bold py-1">
                        <svg class="Svg5" fill="red" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    <button class="text-floblack hover:text-florange py-1">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
                <div class="space-y-4">
                    <div class="flex justify-between items-end">
                        <div class="TextHeader px-1">Het vieze meertje</div>
                        <div><span class="text-xs">door: </span>Floris van Enter</div>
                    </div>
                    <div>
                       <ul class="flex space-x-1">
                           <li class="LocationTag border border-florange-dark text-florange rounded-xl">{{ __('Private') }}</li>
                           <li class="LocationTag border PrimaryBorderColor rounded-xl">{{ __('Lake') }}</li>
                           <li class="LocationTag border PrimaryBorderColor rounded-xl">{{ __('Forest') }}</li>
                           <li class="LocationTag border PrimaryBorderColor rounded-xl">{{ __('Quiet') }}</li>
                       </ul>
                    </div>
                    <div>
                        <h3 class="SubTextHeader p-1">{{ __('Description')}}:</h3>
                        <div class="px-1">
                            Het vieze meertje, Zelf gevonden in het bos nadat we zaten te klooien met de bus in het bos. Herten en zwijnen gezien hier.
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/2">
                            <h3 class="SubTextHeader p-1">{{ __('Coordinates') }}</h3>
                            <div class="flex space-x-4">
                                <div class="SubText px-1">lng:</div>
                                <div>49.00000</div>
                            </div>
                            <div class="flex space-x-4">
                                <div class="SubText px-1">lng:</div>
                                <div>5.00000</div>
                            </div>
                            <div class="flex space-x-4">
                                <div class="SubText px-1">{{ __('Map') }}:</div>
                                <div class="flex space-x-2">
                                    <a href="https://www.google.nl/maps/place/49.73381,5.03199" target="_blank">
                                        <svg class="Svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92.3 132.3"><path fill="#1a73e8" d="M60.2 2.2C55.8.8 51 0 46.1 0 32 0 19.3 6.4 10.8 16.5l21.8 18.3L60.2 2.2z"/><path fill="#ea4335" d="M10.8 16.5C4.1 24.5 0 34.9 0 46.1c0 8.7 1.7 15.7 4.6 22l28-33.3-21.8-18.3z"/><path fill="#4285f4" d="M46.2 28.5c9.8 0 17.7 7.9 17.7 17.7 0 4.3-1.6 8.3-4.2 11.4 0 0 13.9-16.6 27.5-32.7-5.6-10.8-15.3-19-27-22.7L32.6 34.8c3.3-3.8 8.1-6.3 13.6-6.3"/><path fill="#fbbc04" d="M46.2 63.8c-9.8 0-17.7-7.9-17.7-17.7 0-4.3 1.5-8.3 4.1-11.3l-28 33.3c4.8 10.6 12.8 19.2 21 29.9l34.1-40.5c-3.3 3.9-8.1 6.3-13.5 6.3"/><path fill="#34a853" d="M59.1 109.2c15.4-24.1 33.3-35 33.3-63 0-7.7-1.9-14.9-5.2-21.3L25.6 98c2.6 3.4 5.3 7.3 7.9 11.3 9.4 14.5 6.8 23.1 12.8 23.1s3.4-8.7 12.8-23.2"/></svg>
                                    </a>
                                    <a href="https://duckduckgo.com/?q=49.733810%2C+5.031990&iaxm=maps&ia=web" target="_blank">
                                        <svg role="img" class="Svg4" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path d="m 0.9818,7.0182 q 0,-2.6087 1.7047523,-4.31345 Q 4.3913046,1 7.0000002,1 9.6086959,1 11.313448,2.70475 13.0182,4.4095 13.0182,7.0182 q 0,2.20829 -1.249747,3.79778 Q 10.518706,12.40546 8.3710821,12.8908 8.2618809,12.68453 7.9646109,12.25986 7.667341,11.83519 7.5460063,11.58038 q 0.7765419,0.31547 1.0434782,0.31547 0.1941355,0 0.1941355,-0.60667 0,-1.12841 -0.2062689,-1.12841 -0.3033367,0 -1.1769464,0.66734 0,-0.16987 -0.1820021,-0.1456 l -0.060667,0 Q 6.8422654,9.8453 6.8422654,9.19009 q 0,-0.182 0.0364,-0.364 1.1162791,0.546 1.7957533,0.546 0.3761375,0 1.1344793,-0.2184 0.758342,-0.2184 0.758342,-0.4732 0,-0.15774 -0.206269,-0.15774 -0.31547,0 -0.9100103,0.0849 -0.59454,0.0849 -0.9100101,0.0849 -0.3276037,0 -0.7219414,-0.16987 -0.3943377,-0.16987 -0.3943377,-0.46107 0,-0.0607 0.0182,-0.091 0.0182,-0.0303 0.054601,-0.0364 0.0364,-0.006 0.072801,0 0.0364,0.006 0.097068,0.0121 0.060667,0.006 0.1092012,0.006 0.1092012,0 0.3154701,0.0303 0.206269,0.0303 0.3033367,0.0303 0.3761376,0 1.5409505,-0.44287 1.164813,-0.44287 1.164813,-0.68554 0,-0.1456 -0.224469,-0.20627 -0.224469,-0.0607 -0.418605,-0.0607 -0.169868,0 -0.5096055,0.091 -0.3397371,0.091 -0.7401416,0.2184 -0.4004044,0.1274 -0.5338726,0.1638 0.048534,-0.24267 0.048534,-0.38827 0,-0.57027 -0.3033367,-1.32861 Q 8.1162799,4.6155 7.7158754,4.2515 7.3882718,3.9603 6.8422657,3.8511 6.5025286,3.41429 5.7805873,3.05635 5.0586459,2.69842 4.5005064,2.69842 q -0.1092012,0 -0.3336704,0.0425 -0.2244692,0.0425 -0.2851365,0.0546 l -0.2669363,0.37614 0.072801,0.0121 q 0.084934,0 0.2608696,-0.0243 0.1759353,-0.0243 0.2608695,-0.0243 0.4125379,0 0.9464105,0.16987 -0.3397371,0.16987 -0.5945399,0.23053 -0.024267,0.0121 -0.1577351,0.0303 -0.1334681,0.0182 -0.2244691,0.0364 -0.091001,0.0182 -0.1698686,0.0728 -0.078867,0.0546 -0.078867,0.13953 0.6794742,-0.0728 1.0192113,-0.0728 0.4610718,0 0.7280081,0.0849 -0.9342771,0.1092 -1.437816,0.64307 -0.5035389,0.53387 -0.5035389,1.46815 0,0.32761 0.048534,0.60667 0.2305359,1.45602 0.8857432,4.34379 0.4004045,1.86855 0.4489383,2.06269 L 5.1314461,13 Q 3.1900912,12.39333 2.0859456,10.74924 0.9818,9.10516 0.9818,7.0182 Z M 4.4155715,5.51365 q 0,0.0728 0.0364,0.1456 -0.012134,-0.19413 0.2184024,-0.33974 0.2305359,-0.1456 0.4368049,-0.1456 0.097068,0 0.2426693,0.0607 -0.1213346,-0.15773 -0.3518705,-0.15773 -0.206269,0 -0.3943378,0.11526 -0.1880687,0.11527 -0.1880687,0.32154 z m 0.4004044,0.91001 q 0,-0.15773 0.1274015,-0.28514 0.1274014,-0.1274 0.2851365,-0.1274 0.157735,0 0.2851365,0.1274 0.1274014,0.12741 0.1274014,0.28514 0,0.15774 -0.1274014,0.28514 Q 5.3862489,6.8362 5.2285139,6.8362 5.0707788,6.8362 4.9433774,6.7088 4.8159759,6.5814 4.8159759,6.42366 Z M 5.3013147,6.29019 q 0,0.0971 0.1092012,0.0971 0.1092012,0 0.1092012,-0.0971 0,-0.1092 -0.1092012,-0.1092 -0.1092012,0 -0.1092012,0.1092 z M 7.3397373,5.23458 q 0.097068,-0.15773 0.4489383,-0.15773 0.1577351,0 0.4004045,0.12133 -0.1213347,-0.26694 -0.4246714,-0.26694 -0.3761375,0 -0.4246714,0.30334 z m 0.2790698,0.94641 q 0,-0.1456 0.1092012,-0.24874 0.1092012,-0.10313 0.2426694,-0.10313 0.1456016,0 0.2487361,0.10313 0.1031344,0.10314 0.1031344,0.24874 0,0.13347 -0.1031344,0.24267 -0.1031345,0.1092 -0.2487361,0.1092 -0.1334682,0 -0.2426694,-0.1092 Q 7.6188071,6.31446 7.6188071,6.18099 Z M 8.0434785,6.05966 q 0,0.0971 0.084934,0.0971 0.097068,0 0.097068,-0.0971 0,-0.0849 -0.097068,-0.0849 -0.084934,0 -0.084934,0.0849 z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <h3 class="SubTextHeader w-1/4">{{ __('Address') }}</h3>
                            <div class="flex space-x-2 items-center">
                                <div class="SubText">{{ __('Postcode') }}:</div>
                                <div>08140</div>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <div class="SubText">{{ __('Region') }}:</div>
                                <div>Sedan</div>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <div class="SubText">{{ __('City') }}:</div>
                                <div>Villers-Cernay</div>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <div class="SubText">{{ __('Area') }}:</div>
                                <div>Grand Est</div>
                            </div>
                            <div class="flex space-x-2 items-center">
                                <div class="SubText">{{ __('Country') }}:</div>
                                <div class="flex">
                                    Frankrijk
                                    <svg class="ml-3 Svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2"><path fill="#ED2939" d="M0 0h3v2H0z"/><path fill="#fff" d="M0 0h2v2H0z"/><path fill="#002395" d="M0 0h1v2H0z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divide-y divide-grey-300">
                        <h3 class="SubTextHeader py-1">{{ __('Visits')}}:</h3>
                        <div class="flex p-1 hover:bg-gray-200">
                            <div class="w-1/5 text-xs">10 nov 2020</div>
                            <div class="w-4/5 truncate text-xs">Nu heeft Petra een weg gevonden waar we geen problemen hebben met de rit er naar toe.</div>
                        </div>
                        <div class="flex p-1 hover:bg-gray-200"> 
                            <div class="w-1/5 text-xs">10 aug 2018</div>
                            <div class="w-4/5 truncate text-xs">Nu heeft Petra een weg gevonden waar we geen problemen hebben met de rit er naar toe.</div>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <a href="#" class="hover:text-floblue text-florange items-center justify-center tex-sm flex space-x-1">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
                    <div class="lowercase">{{ __('Open for more details') }}</div>
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- End list content, for lists -->
</x-app-layout>