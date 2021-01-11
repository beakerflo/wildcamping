@php

If (!isset($class)) {
    $class = '';
}

@endphp

@if($private)
    <x-svg-picker subject="eyePrivate" :class="$class" size=5 />
@else
    <x-svg-picker subject="eyePublic" :class="$class" size=5 />
@endif
