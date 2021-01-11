<div class="flex space-x-1 md:space-x-2 items-center lowercase text-florange font-semibold text-base md:text-lg">
    @if($svg[$steps[0]])
        <x-svg-picker :subject="$svg[$steps[0]]" :size=5 />
    @endif

    @foreach ($steps as $step)
        <div><a href="{{ route($routes[$step]) }}" class="hover:text-florange-dark hover:underline">{{ __($step) }}</a></div>
        <div>/</div>
    @endforeach
</div>
