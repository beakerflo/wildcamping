@props(['route', 'name'])

@php
$classes = 'font-semibold lowercase flex flex-col md:flex-row justify-center items-center border-b-2 border-transparent transition ease-in duration-150 p-2 md:p-4 pb-3 space-x-1 md:space-x-2 hover:border-gray-400';

if($route == Route::currentRouteName() ) {
    $classes = $classes . ' border-florange';
}
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{ route($route) }}" class="hover:text-floblue">
        {{ $slot }}
    </a>
    <div class="mt-1 md:mt-0"><a href="{{ route($route) }}" class="hover:text-floblue">{{ __($name) }}</a></div>
</li>
