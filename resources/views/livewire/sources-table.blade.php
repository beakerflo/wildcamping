<div class="container my-8 mx-auto mt-16 flex flex-col md:flex-row">
    <div class="w-full md:w-2/3 order-last md:order-first mr-0 md:mr-6 p-2 md:p-0">
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
                    <div wire:click.prevent="getRecordDetails({{ $Record->id }})" class="flex flex-wrap md:flex-no-wrap justify-between px-2 md:px-4 py-2 hover:bg-gray-200">
                        <div class="w-5/12 capitalize" wire:click.prevent="getRecordDetails({{ $Record->id }})">
                            {{ $Record->name }}
                        </div>

                        <div class="w-6/12" wire:click.prevent="getRecordDetails({{ $Record->id }})">
                            {{ $Record->description }}
                        </div>

                        <div class="w-1/12">
                            {{ $Record->locationCount() }}
                        </div>

                        <div class="w-1/12 hidden md:block">
                            <a href="{{ $Record->link }}" target="_blank"><x-svg-picker subject='link' size=5 /></a>
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
                        <div class="flex p-1 justify-between hover:bg-gray-200">
                            <div class="w-9/10 truncate">{{ $location->type->name }} - {{ $location->name }}</div>
                            <div class="w-1/10 ">{!! $location->getFlag(5) !!}</div>
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
                            <x-svg-picker subject="arrowsLeft" size=4 />
                            <div class="lowercase">{{ __('There are more locations, click here') }}</div>
                            <x-svg-picker subject="arrowsRight" size=4 />
                        </a>
                    @endif
                </x-slot>

            </x-data-table-details>
        </div>
    @endif
</div>
