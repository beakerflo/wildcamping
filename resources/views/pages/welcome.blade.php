<x-app-layout title="{{ __($title) }}">
    <div class="container my-8 mx-auto mt-16 flex">
        <div class="w-2/3 mr-6 px-4 py-4 space-y-6">
            <div>
                <h1 class="text-2xl text-florange font-semibold">{{ __('Welcome')}}</h1>
                <div class="text-base">{{ __('This web application is built to store different overnight locations. This can be a campsite worth remembering, a scenic location in the forest or a public parking lot where you can easily spend the night. Unfortunately having an account does not mean that you have access to a multitude of wildcamping locations, but here you can save them for later use. I wrote this application for travelling with my VWV Van and Landcuiser with roof-top tent, but you can save whatever you like.')}}
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <svg class="Svg8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        <div class="ml-4"><a href="https://apivanlife.test/documentation" class="hover:underline hover:text-floblue-dark">{{ __('Documentation') }}</a></div>
                    </div>
                    <div>{{ __('We have written some documentation to provide support in using this web-application. We provide also provide an API service for application use and the routes and manual can be found here.') }}</div>
                </div>
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <svg class="Svg8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div class="ml-4"><a href="https://apivanlife.test/services" class="hover:underline hover:text-floblue-dark">{{ __('Services') }}</a></div>
                    </div>
                    <div>{{ __('To provide the API support, getting addresses for gps coordinates, country information and many more things we use different services. Here we mention our sources for your use and to award them with some attention.') }}</div>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <svg class="Svg8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                        <div class="ml-4"><a href="https://apivanlife.test/services" class="hover:underline hover:text-floblue-dark">{{ __('More about us') }}</a></div>
                    </div>
                    <div>{{ __('We are a Dutch couple who had to wait far too long for the bus to be completed. This gave us some time to find out other things. Now that our VW bus is ready we can fill the database. Check our Dutch site if you are curious about our VW van.') }}</div>
                </div>
                <div class="w-1/2">
                    <div class="flex items-center mb-1 TextHeader">
                        <svg class="Svg8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        <div class="ml-4"><a href="https://apivanlife.test/services" class="hover:underline hover:text-floblue-dark">API</a></div>
                    </div>
                    <div>{{ __('To provide services from apps and iOS Siri Shortcuts we provide an API service. This can be used to sync between servers, applications and other services. Read more in the documentation about the way it is set up.') }}</div>
                </div>
            </div>
        </div>
        <div class="w-1/3 border border-gray-300 rounded-md shadow-md px-4 py-4 space-y-2">
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