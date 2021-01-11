<x-data-table simpleHeader>

    <x-slot name="top">
        <div class="space-x-1">
        </div>
        <x-records-count count="{{ $Count }}" />
    </x-slot>

    <x-slot name="header">
        <div class="w-3/12">
            {{ __('Time') }}
        </div>
        <div class="w-4/12">
            {{ __('Name') }}
        </div>

        <div class="w-5/12">
            {{ __('Description') }}
        </div>
    </x-slot>

    <x-slot name="body">
        @foreach($Records as $Record)
            <div class="flex flex-wrap md:flex-row justify-between lowercase px-4 py-2 hover:bg-gray-200 space-x-1">
                <div class="3/12">
                    {{ $Record->created_at->DiffForHumans() }}
                </div>
                <div class="w-4/12 truncate">
                    {{ $Record->name }}
                </div>

                <div class="w-5/12 truncate">
                    {{ $Record->description }}
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
