<div class="container my-8 mx-auto mt-16 flex flex-col md:flex-row">
    <div class="w-full md:w-2/3 order-last md:order-first mr-0 md:mr-6 p-2 md:p-0">
        <x-data-table>

            <x-slot name="top">
                <div class="space-x-1">
                    <x-table-search-bar class="w-36 h-8 text-xs" />
                    <x-select-teams class="text-xs w-18 md:w-24 h-8" />
                </div>
                <x-records-count count="{{ $Count }}" />
            </x-slot>

            <x-slot name="header">
                <div class="w-2/12 flex space-x-3 items-center">
                    {{ __('Date') }}
                </div>

                <div class="w-4/12">
                    {{ __('Location') }}
                </div>

                <div class="w-6/12 flex space-x-1">
                    {{ __('Story') }}
                </div>
            </x-slot>

            <x-slot name="body">
                @foreach($Records as $Record)
                    <div wire:click.prevent="getRecordDetails({{ $Record->id }})" class="flex flex-wrap md:flex-nowrap justify-between px-2 md:px-4 py-2 hover:bg-gray-200">
                        <div class="w-2/12">
                            {{ $Record->visited_at->DiffForHumans() }}
                        </div>

                        <div class="w-4/12 truncate">
                            {{ $Record->Location->name }}
                        </div>

                        <div class="w-5/12 truncate">
                            {{ $Record->story }}
                        </div>

                        <div class="w-1/12">
                            {!! $Record->Location->getFlag(4) !!}
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
                    <button class="text-floblue lowercase px-2 py-1 rounded-md shadow">
                        <div>{{ $RecordDetails->Location->visitCount() }} {{ __('Visit(s)') }}</div>
                    </button>
                </x-slot>

                <x-slot name="head">
                        {{ $RecordDetails->Location->name }}<br />
                        <span class="text-sm lower">bezocht op: {{ $RecordDetails->visited_at->format('j M Y') }}  ({{ $RecordDetails->visited_at->DiffForHumans() }})</span>
                </x-slot>

                <x-slot name="body">
                    {{ $RecordDetails->story }}
                </x-slot>

                <x-slot name="footer">
                    <a href="#" class="hover:text-florange hover:underline">{{ __('Go to the location') }}</a>
                </x-slot>

            </x-data-table-details>
        </div>
    @endif
</div>
