<div class="container my-8 mx-auto mt-16 flex">
    <div class="w-2/3 mr-6">
        <x-data-table>

            <x-slot name="top">
                <div class="space-x-1">
                    <x-table-search class="w-36 h-8 text-xs" />
                </div>
                <x-records-count count="{{ $Count }}" />
            </x-slot>

            <x-slot name="header">
                <div class="w-5/12">
                    {{ __('Name') }}
                </div>

                <div class="w-6/12">
                    {{ __('Description') }}
                </div>

                <div class="w-1/12">
                    {{ __('Count') }}
                </div>

                <div class="w-1/12">
                </div>
            </x-slot>

            <x-slot name="body">
                @foreach($Records as $Record)
                    <div wire:click.prevent="getRecordDetails({{ $Record->id }})" class="TableRow hover:bg-gray-200 space-x-1">
                        <div class="w-5/12 capitalize" wire:click.prevent="getRecordDetails({{ $Record->id }})">
                            {{ $Record->name }}
                        </div>

                        <div class="w-6/12" wire:click.prevent="getRecordDetails({{ $Record->id }})">
                            {{ $Record->description }}
                        </div>

                        <div class="w-1/12">
                            {{ $Record->locationCount() }}
                        </div>

                        <div class="w-1/12">
                            <a href="{{ $Record->link }}" target="_blank"><svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg></a>
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
        <div class="w-1/3 p-2">
            <x-data-table-details>
                <x-slot name="top">
                    <div> </div>
                    <x-records-count count="{{ $RecordDetails->locationCount() }}" />
                </x-slot>

                <x-slot name="head">
                    {{ $RecordDetails->name }}<br />
                    <span class="text-sm lower">{{ $RecordDetails->description }}</span>
                </x-slot>

                <x-slot name="body">
                    <div class="SubTextHeader">{{ __('Locations') }}</div>
                    @if($RecordDetails->locations->count() > 0)
                        @foreach($RecordDetails->locations->take(24) as $location)
                        <div class="flex p-1 justify-between text-xs hover:bg-gray-200">
                            <div class="w-9/10 truncate">{{ $location->type->name }} - {{ $location->name }}</div>
                            <div class="w-1/10 ">{!! $location->getFlagSvg(5) !!}</div>
                        </div>
                        @endforeach
                    @else
                        <div class="flex p-1 hover:bg-gray-200">
                            {{ __('Unfortunately we have no locations')}}
                        </div>
                    @endif
                </x-slot>

                <x-slot name="footer">
                    @if ($RecordDetails->locations->count() > 24)
                        <a href="#" class="hover:text-floblue text-florange items-center justify-center tex-sm flex space-x-1">
                            <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
                            <div class="lowercase">{{ __('There are more locations, click here') }}</div>
                            <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                        </a>
                    @endif
                </x-slot>

            </x-data-table-details>
        </div>
    @endif
</div>
