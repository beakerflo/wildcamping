<div class="container my-8 mx-auto mt-16 flex flex-col md:flex-row">
    <div class="w-full md:w-2/3 order-last md:order-first mr-0 md:mr-6 p-2 md:p-0">
        <x-data-table>

            <x-slot name="top">
                <div class="space-x-1">
                    <x-table-search-bar class="w-28 md:w-36 h-8 text-xs" />
                    <x-select-types class="text-xs w-18 md:w-24 h-8" />
                    <x-select-sources class="text-xs w-18 md:w-24 h-8" :teams="$Team" />
                    <x-select-teams class="text-xs w-18 md:w-24 h-8" />
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
                        <div>
                            <div class="Header">{{ __('Coordinates') }}</div>
                            <ul>
                                <li>gps: {{ $RecordDetails->coordinate->latitude . ', ' . $RecordDetails->coordinate->longitude }}</li>
                                <li>gps dms: {{ $RecordDetails->coordinate->latitude_dms . ' ' . $RecordDetails->coordinate->longitude_dms }}</li>
                                @if ($RecordDetails->coordinate->what3words)
                                    <li><a class="hover:text-florange" href="https://what3words.com/{{ $RecordDetails->coordinate->what3words->nl }}" target="blank">w3w (nl): {{ $RecordDetails->coordinate->what3words->nl }}</a></li>
                                    <li><a class="hover:text-florange" href="https://what3words.com/{{ $RecordDetails->coordinate->what3words->en }}" target="blank">w3w (en): {{ $RecordDetails->coordinate->what3words->en }}</a></li>
                                @endif
                            </ul>
                        </div>

                        <div class="flex p-4 md:p-0">
                            <div class="w-1/2 space-y-3">
                                <div class="Header">{{ __('Coordinate details') }}</div>
                                <ul>
                                    <li>latitude:
                                        <ul class="ml-3">
                                            <li>{{ $RecordDetails->coordinate->latitude }}</li>
                                            <li>{{ $RecordDetails->coordinate->latitude_dms }}</li>
                                        </ul>
                                    </li>
                                    <li>longitude:
                                        <ul class="ml-3">
                                            <li>{{ $RecordDetails->coordinate->longitude }}</li>
                                            <li>{{ $RecordDetails->coordinate->longitude_dms }}</li>
                                        </ul>
                                    </li>
                                    <li>{{ __('Map') }}:
                                        <ul class="ml-3 mb-1 flex justify-between mr-3">
                                            <x-map-links :lat="$RecordDetails->coordinate->latitude" :lng="$RecordDetails->coordinate->longitude" />
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/2 space-y-3">
                                @if ($RecordDetails->coordinate->NearPlace)
                                    <div class="Header">{{ __('Nearby') }}</div>
                                    <div>{{ $RecordDetails->coordinate->NearPlace->name }}</div>
                                @endif

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
