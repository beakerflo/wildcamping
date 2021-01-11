<div class="container my-8 mx-auto mt-16 flex flex-col md:flex-row">
    <div class="w-full md:w-2/3 order-last md:order-first mt-8 md:mt-0 mr-0 md:mr-6 p-2 md:p-0">
        <x-data-table>

            <x-slot name="top">
                <div class="space-x-1">
                    <x-table-search class="w-36 h-8 text-xs" />
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
                        <div wire:click.prevent="getRecordDetails({{ $Record->id }})" class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="/img-loc/{{ $Record->filename }}" alt="{{ $Record->name }}"></div>
                    @endforeach
                </div>
            </x-slot>

            <x-slot name="footer">
                {{ $Records->links() }}
            </x-slot>

        </x-data-table>
    </div>

    @if (!empty($RecordDetails))
        <div class="w-full md:w-1/3 border PrimaryBorderColor rounded-md shadow-md p-3">
            <div class="flex justify-between mb-4 items-center">
                <div class="TextHeader px-1">{{ $RecordDetails->Location->name }}</div>
                <x-records-count count="{{ $Count }}" />
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
