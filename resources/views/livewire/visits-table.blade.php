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
                <div class="w-2/12 flex space-x-3 items-center">
                    {{ __('Date') }}
                </div>

                <div class="w-4/12">
                    {{ __('Location') }}
                </div>

                <div class="w-6/12 flex space-x-1">
                    {{ __('Story') }}
                </div>
            </div>
        </div>

        <div class="border PrimaryBorderColor rounded-md rounded-t-none divide-y divide-gray-300">
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
            <div class=" mb-4 items-center space-y-4">
                <div class="flex items-center justify-between">
                    <div class="TextHeader px-1">
                        {{ $RecordDetails->Location->name }}
                    </div>
                    <div class="flex space-x-2 items-center">
                        <button class="text-floblue lowercase px-2 py-1 rounded-md shadow flex">
                            <div>{{ $RecordDetails->Location->visitCount() }} {{ __('Visits') }}</div>
                        </button>
                        <button class="text-floblack hover:text-florange py-1">
                            <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                </div>
                <div class="lower text-sm">
                    {{ $RecordDetails->visited_at->format('j M Y') }}  ({{ $RecordDetails->visited_at->DiffForHumans() }})
                </div>
                <div>
                    <h3 class="SubTextHeader py-1">{{ __('Story')}}:</h3>
                    <div>
                        {{ $RecordDetails->story }}
                    </div>
                    <div class="justify-end flex mt-4">
                        <button class="text-florange lowercase px-3 py-2 rounded-md shadow flex">
                            <div><a href="#">{{ __('Go to the location') }}</a></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
