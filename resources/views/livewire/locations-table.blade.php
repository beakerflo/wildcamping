<div class="container my-8 mx-auto mt-16 flex flex-col md:flex-row">
    <div class="w-full md:w-2/3 order-last md:order-first mr-0 md:mr-6 p-2 md:p-0">
        <x-data-table>

            <x-slot name="top">
                <div class="space-x-1">
                    <x-table-search class="w-28 md:w-36 h-8 text-xs" />
                    <x-select-types class="text-xs w-18 md:w-24 h-8" />
                    <x-select-sources class="text-xs w-18 md:w-24 h-8" />
                </div>
                <x-records-count count="{{ $Count }}" />
            </x-slot>

            <x-slot name="header">
                <div class="w-2/12 ml-3">
                    {{ __('Type') }}
                </div>

                <div class="w-3/12">
                    {{ __('Source') }}
                </div>

                <div class="w-6/12 flex space-x-1">
                    {{ __('Name') }}
                </div>

                <div class="w-1/12">
                </div>
            </x-slot>

            <x-slot name="body">
                @foreach($Records as $Record)
                    <div wire:click.prevent="getRecordDetails({{ $Record->id }})" class="flex flex-wrap md:flex-no-wrap justify-between px-2 md:px-4 py-2 hover:bg-gray-200">
                        <div class="w-2/12 md:w-2/12 flex space-x-3 items-center">
                            <x-record-private private="{{ $Record->isPrivate() }}" class="hidden md:block" />
                            <div>{{ $Record->type->name }}</div>
                        </div>

                        <div class="w-3/12 truncate">
                            @foreach ($Record->sources as $Source)
                                {{ $Source->name }}
                            @endforeach
                        </div>

                        <div class="w-6/12 truncate">
                            {{ $Record->name }}
                        </div>

                        <div class="w-full md:w-1/12 order-first md:order-last flex justify-end items-center space-x-1 md:space-x-2">
                            {!! $Record->getFlag(5) !!}
                            <x-record-favorite favorite="{{ $Record->isFavorite() }}" />
                            <x-record-private private="{{ $Record->isPrivate() }}" class="md:hidden" />
                        </div>
                    </div>
                    @endforeach
                </x-slot>

                <x-slot name="footer">
                    {{ $Records->links() }}
                </x-slot>

        </x-data-table>
    </div>

    @if (!empty($RecordDetails))
        <div class="w-full md:w-1/3 p-2 mb-8 md:mb-0">
            <x-data-table-details>
                <x-slot name="top">
                    <div class="flex space-x-1 items-center">
                        <x-record-private private="{{ $Record->isPrivate() }}" class="w-5 h-5" />
                        <x-record-favorite favorite="{{ $Record->isFavorite() }}" />
                    </div>
                        <x-location-visit count="{{ $RecordDetails->visitCount() }}" />
                </x-slot>

                <x-slot name="head">
                    <div class="flex justify-between items-end">
                        <div>{{ $RecordDetails->name }}</div>
                        <div class="text-sm">@foreach($RecordDetails->sources as $source) {{ $source->name }} @endforeach</div>
                    </div>
                </x-slot>

                <x-slot name="body">
                    <div class="space-y-4">
                        @if($RecordDetails->tags->count() > 0)
                            <ul class="flex flex-wrap space-x-2 space-y-1">
                                @foreach($RecordDetails->tags as $tag)
                                    <li class="LocationTag border PrimaryBorderColor rounded-xl">{{ __($tag->name) }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div>
                            <div class="Header">{{ __('Description')}}</div>
                            <div>{{ $RecordDetails->description }}</div>
                        </div>

                        @if ($RecordDetails->images->count() > 0)
                            <img class="rounded-lg shadow" src="/img-loc/{{ $RecordDetails->images[0]->filename }}" />
                        @endif

                        <div class="flex p-4 md:p-0">
                            <div class="w-1/2">
                                <div class="Header">{{ __('Coordinates') }}</div>
                                <ul>
                                    <li>gps: {{ $RecordDetails->coordinate->latitude . ', ' . $RecordDetails->coordinate->longitude }}</li>
                                    <li>latitude: {{ $RecordDetails->coordinate->latitude }}</li>
                                    <li>longitude: {{ $RecordDetails->coordinate->longitude }}</li>
                                    <li class="flex space-x-2">{{ __('Map') }}<br />
                                        <a href="https://www.google.nl/maps/place/{{ $RecordDetails->coordinate->latitude }},{{ $RecordDetails->coordinate->longitude }}" target="_blank">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92.3 132.3"><path fill="#1a73e8" d="M60.2 2.2C55.8.8 51 0 46.1 0 32 0 19.3 6.4 10.8 16.5l21.8 18.3L60.2 2.2z"/><path fill="#ea4335" d="M10.8 16.5C4.1 24.5 0 34.9 0 46.1c0 8.7 1.7 15.7 4.6 22l28-33.3-21.8-18.3z"/><path fill="#4285f4" d="M46.2 28.5c9.8 0 17.7 7.9 17.7 17.7 0 4.3-1.6 8.3-4.2 11.4 0 0 13.9-16.6 27.5-32.7-5.6-10.8-15.3-19-27-22.7L32.6 34.8c3.3-3.8 8.1-6.3 13.6-6.3"/><path fill="#fbbc04" d="M46.2 63.8c-9.8 0-17.7-7.9-17.7-17.7 0-4.3 1.5-8.3 4.1-11.3l-28 33.3c4.8 10.6 12.8 19.2 21 29.9l34.1-40.5c-3.3 3.9-8.1 6.3-13.5 6.3"/><path fill="#34a853" d="M59.1 109.2c15.4-24.1 33.3-35 33.3-63 0-7.7-1.9-14.9-5.2-21.3L25.6 98c2.6 3.4 5.3 7.3 7.9 11.3 9.4 14.5 6.8 23.1 12.8 23.1s3.4-8.7 12.8-23.2"/></svg>
                                        </a>
                                        <a href="https://duckduckgo.com/?q={{ $RecordDetails->coordinate->latitude }}%2C+{{ $RecordDetails->coordinate->longitude }}&iaxm=maps&ia=web" target="_blank">
                                            <svg role="img" class="w-5 h-5" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path d="m 0.9818,7.0182 q 0,-2.6087 1.7047523,-4.31345 Q 4.3913046,1 7.0000002,1 9.6086959,1 11.313448,2.70475 13.0182,4.4095 13.0182,7.0182 q 0,2.20829 -1.249747,3.79778 Q 10.518706,12.40546 8.3710821,12.8908 8.2618809,12.68453 7.9646109,12.25986 7.667341,11.83519 7.5460063,11.58038 q 0.7765419,0.31547 1.0434782,0.31547 0.1941355,0 0.1941355,-0.60667 0,-1.12841 -0.2062689,-1.12841 -0.3033367,0 -1.1769464,0.66734 0,-0.16987 -0.1820021,-0.1456 l -0.060667,0 Q 6.8422654,9.8453 6.8422654,9.19009 q 0,-0.182 0.0364,-0.364 1.1162791,0.546 1.7957533,0.546 0.3761375,0 1.1344793,-0.2184 0.758342,-0.2184 0.758342,-0.4732 0,-0.15774 -0.206269,-0.15774 -0.31547,0 -0.9100103,0.0849 -0.59454,0.0849 -0.9100101,0.0849 -0.3276037,0 -0.7219414,-0.16987 -0.3943377,-0.16987 -0.3943377,-0.46107 0,-0.0607 0.0182,-0.091 0.0182,-0.0303 0.054601,-0.0364 0.0364,-0.006 0.072801,0 0.0364,0.006 0.097068,0.0121 0.060667,0.006 0.1092012,0.006 0.1092012,0 0.3154701,0.0303 0.206269,0.0303 0.3033367,0.0303 0.3761376,0 1.5409505,-0.44287 1.164813,-0.44287 1.164813,-0.68554 0,-0.1456 -0.224469,-0.20627 -0.224469,-0.0607 -0.418605,-0.0607 -0.169868,0 -0.5096055,0.091 -0.3397371,0.091 -0.7401416,0.2184 -0.4004044,0.1274 -0.5338726,0.1638 0.048534,-0.24267 0.048534,-0.38827 0,-0.57027 -0.3033367,-1.32861 Q 8.1162799,4.6155 7.7158754,4.2515 7.3882718,3.9603 6.8422657,3.8511 6.5025286,3.41429 5.7805873,3.05635 5.0586459,2.69842 4.5005064,2.69842 q -0.1092012,0 -0.3336704,0.0425 -0.2244692,0.0425 -0.2851365,0.0546 l -0.2669363,0.37614 0.072801,0.0121 q 0.084934,0 0.2608696,-0.0243 0.1759353,-0.0243 0.2608695,-0.0243 0.4125379,0 0.9464105,0.16987 -0.3397371,0.16987 -0.5945399,0.23053 -0.024267,0.0121 -0.1577351,0.0303 -0.1334681,0.0182 -0.2244691,0.0364 -0.091001,0.0182 -0.1698686,0.0728 -0.078867,0.0546 -0.078867,0.13953 0.6794742,-0.0728 1.0192113,-0.0728 0.4610718,0 0.7280081,0.0849 -0.9342771,0.1092 -1.437816,0.64307 -0.5035389,0.53387 -0.5035389,1.46815 0,0.32761 0.048534,0.60667 0.2305359,1.45602 0.8857432,4.34379 0.4004045,1.86855 0.4489383,2.06269 L 5.1314461,13 Q 3.1900912,12.39333 2.0859456,10.74924 0.9818,9.10516 0.9818,7.0182 Z M 4.4155715,5.51365 q 0,0.0728 0.0364,0.1456 -0.012134,-0.19413 0.2184024,-0.33974 0.2305359,-0.1456 0.4368049,-0.1456 0.097068,0 0.2426693,0.0607 -0.1213346,-0.15773 -0.3518705,-0.15773 -0.206269,0 -0.3943378,0.11526 -0.1880687,0.11527 -0.1880687,0.32154 z m 0.4004044,0.91001 q 0,-0.15773 0.1274015,-0.28514 0.1274014,-0.1274 0.2851365,-0.1274 0.157735,0 0.2851365,0.1274 0.1274014,0.12741 0.1274014,0.28514 0,0.15774 -0.1274014,0.28514 Q 5.3862489,6.8362 5.2285139,6.8362 5.0707788,6.8362 4.9433774,6.7088 4.8159759,6.5814 4.8159759,6.42366 Z M 5.3013147,6.29019 q 0,0.0971 0.1092012,0.0971 0.1092012,0 0.1092012,-0.0971 0,-0.1092 -0.1092012,-0.1092 -0.1092012,0 -0.1092012,0.1092 z M 7.3397373,5.23458 q 0.097068,-0.15773 0.4489383,-0.15773 0.1577351,0 0.4004045,0.12133 -0.1213347,-0.26694 -0.4246714,-0.26694 -0.3761375,0 -0.4246714,0.30334 z m 0.2790698,0.94641 q 0,-0.1456 0.1092012,-0.24874 0.1092012,-0.10313 0.2426694,-0.10313 0.1456016,0 0.2487361,0.10313 0.1031344,0.10314 0.1031344,0.24874 0,0.13347 -0.1031344,0.24267 -0.1031345,0.1092 -0.2487361,0.1092 -0.1334682,0 -0.2426694,-0.1092 Q 7.6188071,6.31446 7.6188071,6.18099 Z M 8.0434785,6.05966 q 0,0.0971 0.084934,0.0971 0.097068,0 0.097068,-0.0971 0,-0.0849 -0.097068,-0.0849 -0.084934,0 -0.084934,0.0849 z"/></svg>
                                        </a>
                                        <a href="https://www.bing.com/maps?rtp=~pos.{{ $RecordDetails->coordinate->latitude }}_{{ $RecordDetails->coordinate->longitude }}" target="_blank" class="text-green-600">
                                            <svg class="w-5 h-5" viewBox="213 138.2 598 747.6" xmlns="http://www.w3.org/2000/svg"><path d="m435 332 76.2 165.1 112.4 50.7-405.7 213.4 166.3-148v-422.5l-171.2-52.5v628.4l170.2 119.2 427.8-255v-183.7z" fill="#00897b"/></svg>
                                        </a>
                                        <a href="https://www.waze.com/live-map/directions?dir_first=poi&latlng={{ $RecordDetails->coordinate->latitude }}%2C{{ $RecordDetails->coordinate->longitude }}&z=17" target="_blank" class="text-green-600">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g><g><path d="M512,224c0-114.688-100.512-208-224-208C164.48,16,64,109.312,64.192,226.464c0.064,0.416,5.92,41.856-12.768,63.712	C43.456,299.456,31.872,304,16,304c-8.832,0-16,7.168-16,16c0,44.352,32.864,75.168,99.168,93.12	C97.312,419.136,96,425.376,96,432c0,35.296,28.704,64,64,64s64-28.704,64-64c0-0.544-0.16-1.024-0.16-1.568	C243.904,431.456,265.184,432,288,432c0,35.296,28.704,64,64,64c35.296,0,64-28.704,64-64c0-11.744-3.424-22.624-8.96-32.128	C469.984,363.008,512,298.048,512,224z M383.328,376.544C374.048,371.264,363.456,368,352,368	c-23.392,0-43.712,12.768-54.848,31.584C294.08,399.712,291.072,400,288,400c-27.072,0-51.328-0.992-74.208-2.4	C202.4,379.84,182.592,368,160,368c-16.512,0-31.456,6.464-42.816,16.768c-46.496-11.008-74.752-27.84-82.752-50.432	c16.896-3.2,30.72-11.008,41.312-23.36C104.16,277.792,96.192,224,96,224c0-97.056,86.112-176,192-176s192,78.944,192,176	C480,289.216,440.992,346.144,383.328,376.544z"/>	</g></g><g>	<g><path d="M224.64,160h-0.32c-8.832,0-15.84,7.168-15.84,16c0,8.832,7.328,16,16.16,16c8.832,0,16-7.168,16-16	C240.64,167.168,233.472,160,224.64,160z"/>	</g></g><g>	<g><path d="M352.64,160h-0.32c-8.832,0-15.84,7.168-15.84,16c0,8.832,7.328,16,16.16,16c8.832,0,16-7.168,16-16	C368.64,167.168,361.472,160,352.64,160z"/>	</g></g><g>	<g><path d="M371.488,240.384c-8.672-1.92-17.152,3.488-19.136,12.096C345.568,282.816,319.104,304,288,304	c-31.072,0-57.568-21.184-64.384-51.52c-1.952-8.64-10.496-13.952-19.136-12.096c-8.608,1.952-14.016,10.496-12.096,19.136	C202.528,304.576,241.856,336,288,336c46.176,0,85.504-31.456,95.616-76.48C385.568,250.88,380.128,242.336,371.488,240.384z"/>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/2">
                                @if ($RecordDetails->coordinate->address)
                                <div class="Header">{{ __('Address') }}</div>
                                <ul>
                                    @if($RecordDetails->coordinate->address->road)<li>{{ __('Road') }}: {{ $RecordDetails->coordinate->address->road }}</li> @endif
                                    @if($RecordDetails->coordinate->address->postcode)<li>{{ __('Postcode') }}: {{ $RecordDetails->coordinate->address->postcode }}</li> @endif
                                    @if($RecordDetails->coordinate->address->part)<li>{{ __('Region') }}: {{ $RecordDetails->coordinate->address->part }}</li> @endif
                                    @if($RecordDetails->coordinate->address->city)<li>{{ __('City') }}: {{ $RecordDetails->coordinate->address->city }}</li> @endif
                                    @if($RecordDetails->coordinate->address->area)<li>{{ __('Area') }}: {{ $RecordDetails->coordinate->address->area }}</li> @endif
                                    @if($RecordDetails->coordinate->address->country->name)<li>
                                        <div class="flex space-x-2 items-center"><div>{{ $RecordDetails->coordinate->address->country->name }}</div> {!! $RecordDetails->getFlag(4) !!}</div></li> @endif
                                </ul>
                                @endif
                            </div>
                        </div>

                        @if ($RecordDetails->visits->count() > 0)
                        <div>
                            <div class="Header">{{ __('Visits') }}</div>
                            @foreach($RecordDetails->visits as $visit)
                            <div class="flex p-1 text-xs hover:bg-gray-200 space-x-1">
                                <div class="w-1/5 ">{{ $visit->visited_at->diffForHumans() }}</div>
                                <div class="w-4/5 truncate">{{ $visit->story }}</div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                    </div>
                </x-slot>

                <x-slot name="footer">

                </x-slot>

            </x-data-table-details>
        </div>
    @endif
</div>
