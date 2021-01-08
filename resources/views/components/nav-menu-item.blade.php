

@props(['route', 'name'])

@php
$classes = 'font-semibold lowercase flex items-center border-b-2 border-transparent transition ease-in duration-150 pr-4 pb-3 space-x-2 hover:border-gray-400';

if($route == Route::currentRouteName() ) {
    $classes = $classes . ' border-floluelight';
}
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
<li class="TopMenuItem hover:text-gray-300"><a href="{{ route($route) }}">{{ __($name) }}</a></li>
