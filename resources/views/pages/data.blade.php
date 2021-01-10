<x-app-layout title="{{ __('Welcome to this page') }}">
    <x-data-menu />

    <div class="container my-8 mx-auto mt-16 flex">
        <div class="mr-6 px-4 py-4 space-y-6">
            <div>
                <h1 class="text-2xl text-florange font-semibold">{{ __('Data tables')}}</h1>
                <div class="text-base">{{ __('This web app is used to save data in of locations, sources and the visits to the location. You can find the most recent data here, if you click on the see more, you will find the complete lists.')}}
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <x-svg-picker subject='locations' size=8 />
                        <div class="ml-4"><a href="{{ route('data.locations') }}" class="hover:underline hover:text-floblue-dark">{{ __('Locations') }}</a></div>
                    </div>
                    <div>Tabel</div>
                </div>
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <x-svg-picker subject='sources' size=8 />
                        <div class="ml-4"><a href="{{ route('data.sources') }}" class="hover:underline hover:text-floblue-dark">{{ __('Sources') }}</a></div>
                    </div>
                    <div>Tabel</div>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <x-svg-picker subject='images' size=8 />
                        <div class="ml-4"><a href="{{ route('data.images') }}" class="hover:underline hover:text-floblue-dark">{{ __('Images') }}</a></div>
                    </div>
                    <div>Tabel</div>
                </div>
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <x-svg-picker subject='visits' size=8 />
                        <div class="ml-4"><a href="{{ route('data.visits') }}" class="hover:underline hover:text-floblue-dark">{{ __('Visits') }}</a></div>
                    </div>
                    <div>Tabel</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
