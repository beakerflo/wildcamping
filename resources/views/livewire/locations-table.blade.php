<div>
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
                <div>{{ $Locations->total() }}</div>
            </button>
            <button class="text-florange hover:text-floblue lowercase px-2 py-1 rounded-md shadow flex space-x-1">
                <svg class="Svg5 hover:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>{{ __('New') }}</div>
            </button>
        </div>
    </div>

    <div class="rounded-md rounded-b-none border-b-0 border PrimaryBorderColor font-semibold items-start">
        <div class="TableHeader">
            <div class="w-2/12 flex space-x-3 items-center">
                <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                <div>{{ __('Type') }}</div>
            </div>

            <div class="w-2/12">
                {{ __('Source') }}
            </div>

            <div class="w-6/12 flex space-x-1">
                {{ __('Name') }}
            </div>

            <div class="w-1/12 flex items-center ">
            </div>

            <div class="w-1/12 space-x-2 items-center">
            </div>
        </div>
    </div>

    <div class="border PrimaryBorderColor rounded-md rounded-t-none divide-y divide-gray-300">
        @foreach($Locations as $Location)
            <div class="TableRow hover:bg-gray-200 space-x-1">
                <div class="w-2/12 flex space-x-3 items-center truncate">
                    <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    <div>{{ $Location->type->name }}</div>
                </div>

                <div class="w-2/12 truncate">
                    @foreach ($Location->sources as $Source)
                        <div>{{ $Source->name }}</div>
                    @endforeach
                </div>

                <div class="w-6/12 flex space-x-1 truncate">
                    {{ $Location->name }}
                </div>

                <div class="w-1/12 flex items-center truncate">
                    {!! $Location->getFlagSvg(5) !!}
                </div>

                <div class="w-1/12 space-x-2 items-center">
                    <button class="hover:text-florange">
                        <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                    </button>
                    @if($Location->isFavorite())
                        <button class="hover:text-floblue-light text-red-600 font-bold">
                            <svg class="Svg4" fill="red" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                    @else
                        <button class="hover:text-red-600 text-floblue-light font-bold">
                            <svg class="Svg4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="px-0 py-4">
        {{ $Locations->links() }}
    </div>
</div>
