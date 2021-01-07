<div class="container my-8 mx-auto mt-16 flex">
    <div class="w-2/3 mr-6">
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

        <div class="border PrimaryBorderColor rounded-md rounded-t-none divide-y divide-gray-300">
            <div class="py-8 px-8">
                <div class="flex flex-wrap -mx-4 -mb-8">
                    @foreach ($Records as $Record)
                        <div wire:click.prevent="getRecordDetails({{ $Record->id }})" class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="/img-loc/{{ $Record->filename }}" alt="{{ $Record->name }}"></div>
                  @endforeach
                </div>
              </div>
        </div>
        <div class="px-0 py-4">
            {{ $Records->links() }}
        </div>
    </div>

    @if (empty($RecordDetails))
        <div class="w-1/3 p-2">

        </div>
    @else
        <div class="w-1/3 border PrimaryBorderColor rounded-md shadow-md p-3">
            <div class="flex justify-between mb-4 items-center">
                <div class="TextHeader px-1">{{ $RecordDetails->Location->name }}</div>
                <div class="flex space-x-2 items-center">
                    <button class="text-floblue lowercase px-2 py-1 rounded-md shadow flex">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        <div>{{ $RecordDetails->Location->imageCount() }}</div>
                    </button>
                    <button class="text-floblack hover:text-florange py-1">
                        <svg class="Svg5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
            <div class="space-y-4">
                <div>{{ $RecordDetails->location->description }}</div>
                <div class="text-right"><a href="#" class="hover:text-florange">{{ __('Click here for more about the location') }}</a></div>
                <div><img class="rounded shadow-md" src="/img-loc/{{ $RecordDetails->filename }}" alt="{{ $RecordDetails->name }}"></div>
                <div class="flex flex-wrap -mb-8">
                    @foreach ($RecordDetails->location->images as $Image)
                        @if ($Image->id != $RecordDetails->id)
                            <div wire:click.prevent="getRecordDetails({{ $Image->id }})" class="md:w-1/2 px-1 mb-8"><img class="rounded shadow-md" src="/img-loc/{{ $Image->filename }}" alt="{{ $Image->name }}"></div>
                        @endif
                  @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
