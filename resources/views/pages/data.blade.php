<x-app-layout title="{{ __('Welcome to this page') }}">
    <x-data-menu />

    <div class="container my-8 mx-auto mt-16 flex">
        <div class="mr-6 px-4 py-8 space-y-10">
            <div class="flex items-start space-x-4">
                <div class="w-1/2">
                    <h1 class="text-2xl text-florange font-semibold">{{ __('Data tables')}}</h1>
                    <div class="text-base">
                        {{ __('This web app is used to save data in of locations, sources and the visits to the location. You can find the most recent data here, if you click on the see more, you will find the complete lists.')}}
                    </div>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <x-svg-picker subject='locations' />
                        <div class="ml-4"><a href="{{ route('data.locations') }}" class="hover:underline hover:text-floblue-dark">{{ __('Locations') }}</a></div>
                    </div>
                    <div><x-common-table model='Location' paginate=8 /></div>
                </div>
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <x-svg-picker subject='sources' />
                        <div class="ml-4"><a href="{{ route('data.sources') }}" class="hover:underline hover:text-floblue-dark">{{ __('Sources') }}</a></div>
                    </div>
                    <div><x-common-table model='Source' paginate=8 /></div>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <x-svg-picker subject='images' />
                        <div class="ml-4"><a href="{{ route('data.images') }}" class="hover:underline hover:text-floblue-dark">{{ __('Images') }}</a></div>
                    </div>
                    <div><x-common-table model='Image' paginate=6 /></div>
                </div>
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <x-svg-picker subject='visits' />
                        <div class="ml-4"><a href="{{ route('data.visits') }}" class="hover:underline hover:text-floblue-dark">{{ __('Visits') }}</a></div>
                    </div>
                    <div><x-common-table model='Visit' orderBy='visited_at' paginate=8 /></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
