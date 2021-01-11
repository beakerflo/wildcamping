@props(['simpleHeader'])

@php
if (!isset($simpleHeader)) {
    $simpleHeader = False;
} else {
    $simpleHeader = True;
}

@endphp

<div class="flex justify-between mb-4 items-center">
    {{ $top }}
</div>

@if ($simpleHeader)
    <div class="flex flex-row rounded-md rounded-b-none border-b-0 border PrimaryBorderColor font-semibold items-start lowercase px-4 py-2">
@else
    <div class="flex flex-row rounded-b-none border-b-0 border PrimaryBorderColor font-semibold items-start lowercase px-4 py-2 text-flowhite bg-florange">
@endif
    {{ $header }}
</div>

<div class="rounded-md rounded-t-none border PrimaryBorderColor divide-y divide-gray-300">
    {{ $body }}
</div>

<div class= "mt-4">
    {{ $footer }}
</div>
