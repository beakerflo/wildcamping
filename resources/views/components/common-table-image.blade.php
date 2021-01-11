<x-data-table simpleHeader>

    <x-slot name="top">
        <div class="space-x-1">
        </div>
        <x-records-count count="{{ $Count }}" />
    </x-slot>

    <x-slot name="header">
        <div>
            {{ __('Complete overview') }}
        </div>
    </x-slot>

    <x-slot name="body">
        <div class="flex py-4 px-4 flex-wrap -mx-4 -mb-8">
            @foreach ($Records as $Record)
                <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="/img-loc/{{ $Record->filename }}" alt="{{ $Record->name }}"></div>
            @endforeach
        </div>
    </x-slot>

    <x-slot name="footer">
        <div class="text-center">
            @if ($Count > 8)
                {{ __('There is more, click here') }}
            @endif
        </div>
    </x-slot>

</x-data-table>
