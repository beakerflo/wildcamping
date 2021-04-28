<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <x-web-icons />

        <title>{{ __($title) }} | {{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        {!! $extraCss !!}

        @livewireStyles

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans subpixel-antialiased text-floblue-dark text-sm bg-flowhite dark:text-flowhite dark:bg_floblue-dark">

        <x-nav-bar />

        <x-sub-nav-bar>
            <x-breadcrumb route="{{ Route::currentRouteName() }}"/>
            @if(Auth::check())
                <x-statistics-bar />
            @endif
        </x-sub-nav-bar>

        {{ $slot }}

        <x-footer />

        @stack('modals')
        @livewireScripts
        {!! $extraJs !!}
    </body>
</html>
