<div class="container my-8 mx-auto mt-16 flex">
    <div class="w-2/3 mr-6">
        <div class="flex justify-between mb-4 items-center">
            <div class="flex items-center space-x-2">
                <div class="flex items-center">
                    <input wire:model.debounce.300ms="search" type="text" class="SearchBar placeholder-floblue shadow w-38" placeholder="{{ __('Type to search') }}">
                </div>

                <div>
                    <select wire:model="type" class="appearance-none text-xs px-1 w-24 border border-florange-dark h-8 rounded">
                        <option value=''>{{ __('No filter') }}</option>
                        @foreach($Types as $Type)
                            <option>{{ $Type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select wire:model="source" class="appearance-none text-xs px-1 w-24 border border-florange-dark h-8 rounded">
                        <option value=''>{{ __('No filter') }}</option>
                        @foreach($Sources as $Source)
                            <option>{{ $Source->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="flex space-x-1"">
                <button class="text-floblue lowercase px-2 py-1 rounded-md shadow flex space-x-1">
                    <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    <div>{{ $RecordsCount }}</div>
                </button>
            </div>
        </div>

        <div class="rounded-md rounded-b-none border-b-0 border PrimaryBorderColor font-semibold items-start">
            <div class="TableHeader">
                <div class="w-2/12 flex space-x-3 items-center">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    <div>{{ __('Type') }}</div>
                </div>

                <div class="w-3/12">
                    {{ __('Source') }}
                </div>

                <div class="w-6/12 flex space-x-1">
                    {{ __('Name') }}
                </div>

                <div class="w-1/12 flex items-center ">
                </div>
            </div>
        </div>

        <div class="border PrimaryBorderColor rounded-md rounded-t-none divide-y divide-gray-300">
            @foreach($Records as $Record)
                <div wire:click.prevent="getRecordDetails({{ $Record->Location->id }})" class="TableRow hover:bg-gray-200 space-x-1">
                    <div class="w-2/12 flex space-x-3 items-center truncate">
                        @if($Record->Location->isPrivate())
                            <svg class="Svg4 text-florange-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
                        @else
                            <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        @endif
                        <div>{{ $Record->Location->type->name }}</div>
                    </div>

                    <div class="w-3/12 truncate">
                        @foreach ($Record->Location->sources as $Source)
                            <div class="capitalize">{{ $Source->name }}</div>
                        @endforeach
                    </div>

                    <div class="w-6/12 flex space-x-1 truncate">
                        {{ $Record->Location->name }}
                    </div>

                    <div class="w-1/12 flex justify-end items-center">
                        {!! $Record->Location->getFlagSvg(5) !!}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="px-0 py-4">
            {{ $Records->links() }}
        </div>
    </div>

    @if (empty($RecordDetails))
        <div class="w-1/3 p-2">

        </div>
    @else
        <div class="w-1/3 border PrimaryBorderColor rounded-md shadow-md max-h-screen p-2">
            <div class="flex justify-between mb-4 items-center">
                <div class="flex space-x-2">
                    @if($RecordDetails->isPrivate())
                    <button class="LocationTag border border-florange-dark text-florange rounded-xl">{{ __('Private') }}</button>
                @endif

                @if($RecordDetails->isFavorite())
                <button class="text-red-600 hover:text-floblue font-bold py-1">
                    <svg class="Svg6" fill="red" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </button>
                @else
                    <button class="text-floblue-light font-bold">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                @endif
                </div>
                <div class="flex space-x-2">
                    <button class="py-1 hover:text-florange">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                    </button>

                    <button class="text-floblack hover:text-florange py-1">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex justify-between items-start">
                    <div class="TextHeader px-1 space-x-1">{{ $RecordDetails->name }}</div>
                    <div><span class="flex text-xs">door: </span>@foreach($RecordDetails->sources as $source) <div>{{ $source->name }} @endforeach</div></div>
                </div>
                <div>
                    <ul class="flex flex-wrap space-x-1">
                        @if($RecordDetails->tags->count() > 0)
                            @foreach($RecordDetails->tags as $tag)
                                <li class="LocationTag border PrimaryBorderColor rounded-xl">{{ __($tag->name) }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div>
                    <h3 class="SubTextHeader p-1">{{ __('Description')}}:</h3>
                    <div class="flex">
                        <div class="pl-1 w-1/2">
                                {{ $RecordDetails->description }}
                        </div>
                        <div class="w-1/2">
                            @if ($RecordDetails->images->count() > 0)
                                <img src="/img-loc/{{ $RecordDetails->images[0]->filename }}" alt="{{ $RecordDetails->images[0]->name }}" />
                            @endif
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <h3 class="SubTextHeader p-1">{{ __('Coordinates') }}</h3>
                        <div class="flex space-x-4">
                            <div class="SubText px-1">lng:</div>
                            <div>{{ $RecordDetails->coordinate->latitude }}</div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="SubText px-1">lng:</div>
                            <div>{{ $RecordDetails->coordinate->longitude }}</div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="SubText px-1">{{ __('Map') }}:</div>
                            <div class="flex space-x-2">
                                <a href="https://www.google.nl/maps/place/{{ $RecordDetails->coordinate->latitude }},{{ $RecordDetails->coordinate->longitude }}" target="_blank">
                                    <svg class="Svg4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92.3 132.3"><path fill="#1a73e8" d="M60.2 2.2C55.8.8 51 0 46.1 0 32 0 19.3 6.4 10.8 16.5l21.8 18.3L60.2 2.2z"/><path fill="#ea4335" d="M10.8 16.5C4.1 24.5 0 34.9 0 46.1c0 8.7 1.7 15.7 4.6 22l28-33.3-21.8-18.3z"/><path fill="#4285f4" d="M46.2 28.5c9.8 0 17.7 7.9 17.7 17.7 0 4.3-1.6 8.3-4.2 11.4 0 0 13.9-16.6 27.5-32.7-5.6-10.8-15.3-19-27-22.7L32.6 34.8c3.3-3.8 8.1-6.3 13.6-6.3"/><path fill="#fbbc04" d="M46.2 63.8c-9.8 0-17.7-7.9-17.7-17.7 0-4.3 1.5-8.3 4.1-11.3l-28 33.3c4.8 10.6 12.8 19.2 21 29.9l34.1-40.5c-3.3 3.9-8.1 6.3-13.5 6.3"/><path fill="#34a853" d="M59.1 109.2c15.4-24.1 33.3-35 33.3-63 0-7.7-1.9-14.9-5.2-21.3L25.6 98c2.6 3.4 5.3 7.3 7.9 11.3 9.4 14.5 6.8 23.1 12.8 23.1s3.4-8.7 12.8-23.2"/></svg>
                                </a>
                                <a href="https://duckduckgo.com/?q={{ $RecordDetails->coordinate->latitude }}%2C+{{ $RecordDetails->coordinate->longitude }}&iaxm=maps&ia=web" target="_blank">
                                    <svg role="img" class="Svg4" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path d="m 0.9818,7.0182 q 0,-2.6087 1.7047523,-4.31345 Q 4.3913046,1 7.0000002,1 9.6086959,1 11.313448,2.70475 13.0182,4.4095 13.0182,7.0182 q 0,2.20829 -1.249747,3.79778 Q 10.518706,12.40546 8.3710821,12.8908 8.2618809,12.68453 7.9646109,12.25986 7.667341,11.83519 7.5460063,11.58038 q 0.7765419,0.31547 1.0434782,0.31547 0.1941355,0 0.1941355,-0.60667 0,-1.12841 -0.2062689,-1.12841 -0.3033367,0 -1.1769464,0.66734 0,-0.16987 -0.1820021,-0.1456 l -0.060667,0 Q 6.8422654,9.8453 6.8422654,9.19009 q 0,-0.182 0.0364,-0.364 1.1162791,0.546 1.7957533,0.546 0.3761375,0 1.1344793,-0.2184 0.758342,-0.2184 0.758342,-0.4732 0,-0.15774 -0.206269,-0.15774 -0.31547,0 -0.9100103,0.0849 -0.59454,0.0849 -0.9100101,0.0849 -0.3276037,0 -0.7219414,-0.16987 -0.3943377,-0.16987 -0.3943377,-0.46107 0,-0.0607 0.0182,-0.091 0.0182,-0.0303 0.054601,-0.0364 0.0364,-0.006 0.072801,0 0.0364,0.006 0.097068,0.0121 0.060667,0.006 0.1092012,0.006 0.1092012,0 0.3154701,0.0303 0.206269,0.0303 0.3033367,0.0303 0.3761376,0 1.5409505,-0.44287 1.164813,-0.44287 1.164813,-0.68554 0,-0.1456 -0.224469,-0.20627 -0.224469,-0.0607 -0.418605,-0.0607 -0.169868,0 -0.5096055,0.091 -0.3397371,0.091 -0.7401416,0.2184 -0.4004044,0.1274 -0.5338726,0.1638 0.048534,-0.24267 0.048534,-0.38827 0,-0.57027 -0.3033367,-1.32861 Q 8.1162799,4.6155 7.7158754,4.2515 7.3882718,3.9603 6.8422657,3.8511 6.5025286,3.41429 5.7805873,3.05635 5.0586459,2.69842 4.5005064,2.69842 q -0.1092012,0 -0.3336704,0.0425 -0.2244692,0.0425 -0.2851365,0.0546 l -0.2669363,0.37614 0.072801,0.0121 q 0.084934,0 0.2608696,-0.0243 0.1759353,-0.0243 0.2608695,-0.0243 0.4125379,0 0.9464105,0.16987 -0.3397371,0.16987 -0.5945399,0.23053 -0.024267,0.0121 -0.1577351,0.0303 -0.1334681,0.0182 -0.2244691,0.0364 -0.091001,0.0182 -0.1698686,0.0728 -0.078867,0.0546 -0.078867,0.13953 0.6794742,-0.0728 1.0192113,-0.0728 0.4610718,0 0.7280081,0.0849 -0.9342771,0.1092 -1.437816,0.64307 -0.5035389,0.53387 -0.5035389,1.46815 0,0.32761 0.048534,0.60667 0.2305359,1.45602 0.8857432,4.34379 0.4004045,1.86855 0.4489383,2.06269 L 5.1314461,13 Q 3.1900912,12.39333 2.0859456,10.74924 0.9818,9.10516 0.9818,7.0182 Z M 4.4155715,5.51365 q 0,0.0728 0.0364,0.1456 -0.012134,-0.19413 0.2184024,-0.33974 0.2305359,-0.1456 0.4368049,-0.1456 0.097068,0 0.2426693,0.0607 -0.1213346,-0.15773 -0.3518705,-0.15773 -0.206269,0 -0.3943378,0.11526 -0.1880687,0.11527 -0.1880687,0.32154 z m 0.4004044,0.91001 q 0,-0.15773 0.1274015,-0.28514 0.1274014,-0.1274 0.2851365,-0.1274 0.157735,0 0.2851365,0.1274 0.1274014,0.12741 0.1274014,0.28514 0,0.15774 -0.1274014,0.28514 Q 5.3862489,6.8362 5.2285139,6.8362 5.0707788,6.8362 4.9433774,6.7088 4.8159759,6.5814 4.8159759,6.42366 Z M 5.3013147,6.29019 q 0,0.0971 0.1092012,0.0971 0.1092012,0 0.1092012,-0.0971 0,-0.1092 -0.1092012,-0.1092 -0.1092012,0 -0.1092012,0.1092 z M 7.3397373,5.23458 q 0.097068,-0.15773 0.4489383,-0.15773 0.1577351,0 0.4004045,0.12133 -0.1213347,-0.26694 -0.4246714,-0.26694 -0.3761375,0 -0.4246714,0.30334 z m 0.2790698,0.94641 q 0,-0.1456 0.1092012,-0.24874 0.1092012,-0.10313 0.2426694,-0.10313 0.1456016,0 0.2487361,0.10313 0.1031344,0.10314 0.1031344,0.24874 0,0.13347 -0.1031344,0.24267 -0.1031345,0.1092 -0.2487361,0.1092 -0.1334682,0 -0.2426694,-0.1092 Q 7.6188071,6.31446 7.6188071,6.18099 Z M 8.0434785,6.05966 q 0,0.0971 0.084934,0.0971 0.097068,0 0.097068,-0.0971 0,-0.0849 -0.097068,-0.0849 -0.084934,0 -0.084934,0.0849 z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <h3 class="SubTextHeader w-1/4">{{ __('Address') }}</h3>
                        <div class="flex space-x-2 items-center">
                            <div class="SubText">{{ __('Postcode') }}:</div>
                            <div>{{ $RecordDetails->coordinate->address->postcode }}</div>
                        </div>
                        <div class="flex space-x-2 items-center">
                            <div class="SubText">{{ __('Region') }}:</div>
                            <div>{{ $RecordDetails->coordinate->address->part }}</div>
                        </div>
                        <div class="flex space-x-2 items-center">
                            <div class="SubText">{{ __('City') }}:</div>
                            <div>{{ $RecordDetails->coordinate->address->city }}</div>
                        </div>
                        <div class="flex space-x-2 items-center">
                            <div class="SubText">{{ __('Area') }}:</div>
                            <div>{{ $RecordDetails->coordinate->address->state }}</div>
                        </div>
                        <div class="flex space-x-2 items-center">
                            <div class="SubText">{{ __('Country') }}:</div>
                            <div class="flex space-x-3">
                                <div>{{ $RecordDetails->coordinate->address->country->name }}</div>
                                {!! $RecordDetails->getFlagSvg(4) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divide-y divide-grey-300">
                    <h3 class="SubTextHeader py-1">{{ __('Visits')}}:</h3>
                    @if($RecordDetails->visits->count() > 0)
                        @foreach($RecordDetails->visits as $visit)
                        <div class="flex p-1 text-xs hover:bg-gray-200">
                            <div class="w-1/5 ">{{ $visit->visited_at->diffForHumans() }}</div>
                            <div class="w-4/5 truncate">$visit->story</div>
                        </div>
                        @endforeach
                    @else
                        <div class="flex p-1 hover:bg-gray-200">
                            {{ __('Unfortunately we have not visited it yet')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="p-2 mt-3">
                <a href="#" class="hover:text-floblue text-florange items-center justify-center tex-sm flex space-x-1">
                <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
                <div class="lowercase">{{ __('Open for more details') }}</div>
                <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    @endif
</div>
