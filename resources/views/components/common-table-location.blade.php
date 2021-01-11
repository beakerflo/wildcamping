<x-data-table simpleHeader>

    <x-slot name="top">
        <div></div>
        <x-records-count count="{{ $Count }}" />
    </x-slot>

    <x-slot name="header">
        <div class="w-2/12">
            {{ __('Time') }}
        </div>

        <div class="w-3/12">
            {{ __('Source') }}
        </div>

        <div class="w-7/12">
            {{ __('Name') }}
        </div>
    </x-slot>

    <x-slot name="body">
        @foreach($Records as $Record)
            <div class="flex justify-between px-2 md:px-4 py-2 hover:bg-gray-200">
                <div class="w-2/12 truncate">
                    {{ $Record->created_at->DiffForHumans() }}
                </div>

                <div class="w-3/12 truncate">
                    @foreach ($Record->sources as $Source)
                        {{ $Source->name }}
                    @endforeach
                </div>

                <div class="w-7/12 truncate">
                    {{ $Record->name }}
                </div>
            </div>
            @endforeach
        </x-slot>

        <x-slot name="footer">
            <div class="text-center">
                @if ($Count > 8)
                    {{ __('There is more, click here') }}
                @endif
            </div>
        </x-slot>

</x-data-table>
