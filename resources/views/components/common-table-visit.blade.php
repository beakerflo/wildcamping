<x-data-table simpleHeader>

    <x-slot name="top">
        <div class="space-x-1">
        </div>
        <x-records-count count="{{ $Count }}" />
    </x-slot>

    <x-slot name="header">
        <div class="w-2/12 flex space-x-3 items-center">
            {{ __('Time') }}
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
            <div class="TableRow hover:bg-gray-200 space-x-1 items-center">
                <div class="w-2/12">
                    {{ $Record->visited_at->DiffForHumans() }}
                </div>

                <div class="w-4/12 truncate">
                    {{ $Record->Location->name }}
                </div>

                <div class="w-6/12 truncate">
                    {{ $Record->story }}
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
