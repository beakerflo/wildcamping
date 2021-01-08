<div class="container my-8 mx-auto mt-16 flex">
    <div class="w-1/2 mr-6">
        <x-data-table>

            <x-slot name="top">
                <div class="space-x-1">
                    <x-table-search class="w-36 h-8 text-xs" />
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
                    <div wire:click.prevent="getRecordDetails({{ $Record->id }})" class="TableRow hover:bg-gray-200 space-x-1 items-center">
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
                            {!! $Record->Location->getFlagSvg(4) !!}
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
        <div class="w-1/2 p-2">
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
