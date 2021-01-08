@props(['route', 'name'])

@php
$classes = 'font-semibold lowercase flex items-center border-b-2 border-transparent transition ease-in duration-150 pr-4 pb-3 space-x-2 hover:border-gray-400';

if($route == Route::currentRouteName() ) {
    $classes = $classes . ' border-florange';
}
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    <div><a href="{{ route($route) }}" class="hover:text-floblue">{{ __($name) }}</a></div>
</li>
