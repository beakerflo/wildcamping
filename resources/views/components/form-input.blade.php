@props([
    'disabled' => false,
    'placeholder' => ''
    ])

<input placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-input rounded-md shadow-sm']) !!}>
