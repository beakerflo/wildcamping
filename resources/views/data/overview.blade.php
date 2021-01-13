<x-app-layout title="{{ __('The data of the site') }}">
    <x-data-menu />

    <div class="container my-8 mx-auto mt-16 flex">
        <div class="mr-6 px-4 py-8 space-y-10">

            <x-two-columns-on-page>
                <x-slot name="col1">
                    <x-column>
                        <x-slot name="header">
                            <h1 class="text-2xl text-florange font-semibold">{{ __('Data')}}</h1>
                        </x-slot>
                        <x-slot name="body">
                            {{ __('This web app is used to save data in of locations, sources and the visits to the location. You can find the most recent data here, if you click on the see more, you will find the complete lists.')}}
                        </x-slot>
                    </x-column>
                </x-slot>

                <x-slot name="col2">
                    <x-column>
                        <x-slot name="header">

                        </x-slot>
                        <x-slot name="body">

                        </x-slot>
                    </x-column>
                </x-slot>
            </x-two-columns-on-page>

            <x-two-columns-on-page>
                <x-slot name="col1">
                    <x-column>
                        <x-slot name="header">
                            <x-svg-picker subject='locations' />
                            <div class="ml-2 md:ml-4"><a href="{{ route('data.locations') }}" class="hover:underline hover:text-floblue-dark">{{ __('Locations') }}</a></div>
                        </x-slot>
                        <x-slot name="body">
                            <x-common-table model='Location' paginate=8 />
                        </x-slot>
                    </x-column>
                </x-slot>

                <x-slot name="col2">
                    <x-column>
                        <x-slot name="header">
                            <x-svg-picker subject='sources' />
                            <div class="ml-2 md:ml-4"><a href="{{ route('data.sources') }}" class="hover:underline hover:text-floblue-dark">{{ __('Sources') }}</a></div>
                        </x-slot>
                        <x-slot name="body">
                            <x-common-table model='Source' paginate=8 />
                        </x-slot>
                    </x-column>
                </x-slot>
	        </x-two-columns-on-page>

            <x-two-columns-on-page>
                <x-slot name="col1">
                    <x-column>
                        <x-slot name="header">
                            <x-svg-picker subject='images' />
                            <div class="ml-2 md:ml-4"><a href="{{ route('data.images') }}" class="hover:underline hover:text-floblue-dark">{{ __('Images') }}</a></div>
                        </x-slot>
                        <x-slot name="body">
                            <x-common-table model='Image' paginate=6 />
                        </x-slot>
                    </x-column>
                </x-slot>

                <x-slot name="col2">
                    <x-column>
                        <x-slot name="header">
                            <x-svg-picker subject='visits' />
                            <div class="ml-2 md:ml-4"><a href="{{ route('data.visits') }}" class="hover:underline hover:text-floblue-dark">{{ __('Visits') }}</a></div>
                        </x-slot>
                        <x-slot name="body">
                            <x-common-table model='Visit' orderBy='visited_at' paginate=8 />
                        </x-slot>
                    </x-column>
                </x-slot>
	        </x-two-columns-on-page>

        </div>
    </div>
</x-app-layout>
