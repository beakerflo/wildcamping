@if($favorite)
    <button class="text-red-600 font-bold">
@else
    <button class="text-floblue-light font-bold">
@endif
    <x-svg-picker subject="heart" size=5 />
</button>
