<x-app-layout title="{{ __('Welcome to this page') }}" breadcrumb="pages,welcome">
    <div class="container my-8 mx-auto mt-10 flex">
        <div class="md:w-2/3 md:mr-6 px-4 py-4 space-y-6">
            <div>
                <h1 class="text-2xl text-florange font-semibold">{{ __('Welcome')}}</h1>
                <div class="text-base">
                    {{ __('This web application is built to store different overnight locations. This can be a campsite worth remembering, a scenic location in the forest or a public parking lot where you can easily spend the night. Unfortunately having an account does not mean that you have access to a multitude of wildcamping locations, but here you can save them for later use. I wrote this application for travelling with my VWV Van and Landcuiser with roof-top tent, but you can save whatever you like.')}}
                </div>
            </div>

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

            <x-two-columns-on-page>
                <x-slot name="col1">
                    <x-column>
                        <x-slot name="header">
                            <x-svg-picker subject='about' size=8 />
                            <div class="ml-2 md:ml-4"><a href="#" class="hover:underline hover:text-floblue-dark">{{ __('More about us') }}</a></div>
                        </x-slot>
                        <x-slot name="body">
                            {{ __('We are a Dutch couple who had to wait far too long for the bus to be completed. This gave us some time to find out other things. Now that our VW bus is ready we can fill the database. Check our Dutch site if you are curious about our VW van.') }}
                        </x-slot>
                    </x-column>
                </x-slot>

                <x-slot name="col2">
                    <x-column>
                        <x-slot name="header">
                            <x-svg-picker subject='api' size=8 />
                            <div class="ml-2 md:ml-4"><a href="#" class="hover:underline hover:text-floblue-dark">API</a></div>
                        </x-slot>
                        <x-slot name="body">
                            {{ __('To provide services from apps and iOS Siri Shortcuts we provide an API service. This can be used to sync between servers, applications and other services. Read more in the documentation about the way it is set up.') }}
                        </x-slot>
                    </x-column>
                </x-slot>
            </x-two-columns-on-page>
        </div>
        <div class="hidden md:block w-1/3 border border-gray-300 rounded-md shadow-md px-4 py-4 space-y-2">
            <h2 class="TextHeader">{{ __('On this site')}}</h2>
            <ul class="ml-4 text-base font-semibold space-y-1 lowercase">
                <li><a href="#" class="hover:text-florange">Home</a> -
                    <span class="ml-1 SubText">{{ __('This page') }}</span></li>
                <li><a href="#" class="hover:text-florange">{{ __('Data') }}</a> -
                    <span class="ml-1 SubText">{{ __('Data currently available') }}</span></li>
                <li><a href="#" class="hover:text-florange">{{ __('Documentation') }}</a> -
                    <span class="ml-1 SubText">{{ __('More information') }}</span></li>
                <li><a href="#" class="hover:text-florange">{{ __('API') }}</a> -
                    <span class="ml-1 SubText">{{ __('A programmable interface') }}</span></li>
                <li><a href="#" class="hover:text-florange">{{ __('Services') }}</a> -
                    <span class="ml-1 SubText">{{ __('The services we use') }}</span></li>
                <li><a href="#" class="hover:text-florange">{{ __('About') }}</a> -
                    <span class="ml-1 SubText">{{ __('Behind the scenes, the team') }}</span></li>
                <li><a href="#" class="hover:text-florange">{{ __('Contact') }}</a> -
                    <span class="ml-1 SubText">{{ __('Contact us for anything') }}</span></li>
            </ul>
        </div>
    </div>
</x-app-layout>
