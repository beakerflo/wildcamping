<x-app-layout title="ervices we use">

    <div class="container my-8 mx-auto mt-10">
        <div>
            <h1 class="text-2xl text-florange font-semibold">{{ __('Welcome')}}</h1>
            <div class="text-base">
                {{ __('This web application is built to store different overnight locations. This can be a campsite worth remembering, a scenic location in the forest or a public parking lot where you can easily spend the night. Unfortunately having an account does not mean that you have access to a multitude of wildcamping locations, but here you can save them for later use. I wrote this application for travelling with my VWV Van and Landcuiser with roof-top tent, but you can save whatever you like.')}}
            </div>
        </div>
    </div>

    <div class="container my-8 mx-auto mt-10 flex">
        <x-two-columns-on-page>
            <x-slot name="col1">
                <x-column>
                    <x-slot name="header">
                        <x-svg-picker subject='documentation' size=8 />
                        <div class="ml-2 md:ml-4"><a href="https://apivanlife.test/documentation" class="hover:underline hover:text-floblue-dark">{{ __('Documentation') }}</a></div>
                    </x-slot>
                    <x-slot name="body">
                        {{ __('We have written some documentation to provide support in using this web-application. We provide also provide an API service for application use and the routes and manual can be found here.') }}
                    </x-slot>
                </x-column>
            </x-slot>

            <x-slot name="col2">
                <x-column>
                    <x-slot name="header">
                        <x-svg-picker subject='services' size=8 />
                        <div class="ml-2 md:ml-4"><a href="#" class="hover:underline hover:text-floblue-dark">{{ __('Services') }}</a></div>
                    </x-slot>
                    <x-slot name="body">
                        {{ __('To provide the API support, getting addresses for gps coordinates, country information and many more things we use different services. Here we mention our sources for your use and to award them with some attention.') }}
                    </x-slot>
                </x-column>
            </x-slot>
        </x-two-columns-on-page>
    </div>

</x-app-layout>
