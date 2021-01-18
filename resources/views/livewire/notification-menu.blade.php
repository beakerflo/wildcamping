<div>
@if(Auth::check())
    <div class="relative">
        <button wire:click="toggle" class="mt-2"><x-svg-picker subject="bell" size=6 /></button>
        @if ($notificationCount < 0)
            <div class="absolute bg-floblue-light rounded-full top-0 right-0 w-2 h-2"></div>
        @endif
    </div>

    @if($isVisible)
        <div class="bg-gray-100 text-floblue-dark" >
            <div class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-28">
                <div class="rounded-md shadow-xs py-1 bg-flowhite">
                    <div class="block px-4 py-2">
                        {{ __('No notifications') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

@endif
</div>
