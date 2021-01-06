<div class="container my-8 mx-auto mt-16 flex">
    <div class="w-1/2 mr-6">
        <div class="flex justify-between mb-4 items-center">
            <div class="flex items-center space-x-2">
                <div class="flex items-center">
                    <input wire:model.debounce.300ms="search" type="text" class="SearchBar placeholder-floblue shadow w-38" placeholder="{{ __('Type to search') }}">
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
                <div class="w-5/12 flex space-x-3 items-center">
                    {{ __('Name') }}
                </div>

                <div class="w-6/12">
                    {{ __('Description') }}
                </div>

                <div class="w-1/12 flex space-x-1">
                    {{ __('Count') }}
                </div>

                <div class="w-1/12 flex items-center ">
                </div>
            </div>
        </div>

        <div class="border PrimaryBorderColor rounded-md rounded-t-none divide-y divide-gray-300">
            @foreach($Records as $Record)
                <div wire:click.prevent="getLocationDetails({{ $Record->id }})" class="TableRow hover:bg-gray-200 space-x-1">
                    <div class="w-5/12 flex space-x-3 items-center" wire:click.prevent="getLocationDetails({{ $Record->id }})">
                        {{ $Record->name }}
                    </div>

                    <div class="w-6/12" wire:click.prevent="getLocationDetails({{ $Record->id }})">
                        {{ $Record->Description }}
                    </div>

                    <div class="w-1/12 flex space-x-1">
                        {{ $Record->locationCount() }}
                    </div>

                    <div class="w-1/12 flex items-center ">
                        <a href="{{ $Record->link }}" target="_blank"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="px-0 py-4">
            {{ $Records->links() }}
        </div>
    </div>

    @if (empty($RecordDetails))
        <div class="w-1/2 p-2">

        </div>
    @else
        <div class="w-1/2 border PrimaryBorderColor rounded-md shadow-md p-3">
            <div class="flex justify-between mb-4 items-center">
                <div class="TextHeader px-1">{{ $RecordDetails->name }}</div>
                <div class="flex space-x-2 items-center">
                    <button class="text-floblue lowercase px-2 py-1 rounded-md shadow flex">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        <div>{{ $RecordDetails->locationCount() }}</div>
                    </button>
                    <button class="text-floblack hover:text-florange py-1">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
            <div class="space-y-4">
                <div>
                    {{ $RecordDetails->Description }}
                </div>

                </div>
                <div class="divide-y divide-grey-300">
                    <h3 class="SubTextHeader py-1">{{ __('Locations')}}:</h3>
                    @if($RecordDetails->locations->count() > 0)
                        @foreach($RecordDetails->locations->take(24) as $location)
                        <div class="flex p-1 text-xs hover:bg-gray-200">
                            <div class="w-2/5 truncate">{{ $location->type->name }}</div>
                            <div class="w-3/5 truncate">{{ $location->name }}</div>
                            <div class="w-1/5 ">{!! $location->getFlagSvg(5) !!}</div>
                        </div>
                        @endforeach
                    @else
                        <div class="flex p-1 hover:bg-gray-200">
                            {{ __('Unfortunately we have no locations')}}
                        </div>
                    @endif
                </div>
                @if($RecordDetails->locations->count() > 24)
                <div class="p-2 mt-3">
                    <a href="#" class="hover:text-floblue text-florange items-center justify-center tex-sm flex space-x-1">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
                    <div class="lowercase">{{ __('There are more locations, click here for validation.required_with_all') }}</div>
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                    </a>
                </div>
                @endif
            </div>
        </div>
    @endif
</div>
