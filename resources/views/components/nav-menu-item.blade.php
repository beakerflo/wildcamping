

@props(['route', 'item'])

@php
$classes = 'font-semibold lowercase flex items-center border-b-2 border-transparent py-2 transition ease-in duration-150 hover:border-gray-400';

if($route == Route::currentRouteName() ) {
    $classes = $classes . ' border-gray-200';
}
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{ route($route) }}">{{ __($item) }}</a>
</li>
