<div class="flex space-x-1 md:space-x-2 items-center lowercase text-florange font-semibold text-base md:text-lg">
    @if($Svg[$steps[0]])
        <x-Svg-picker :subject="$Svg[$steps[0]]" :size=5 />
    @endif

    @foreach ($steps as $step)
        @php if (!isset($routes[$step])) { $routes[$step] = '#'; } @endphp
        @if($routes[$step] == '#')
            <div><a href="#" class="hover:text-florange-dark hover:underline">{{ __($step) }}</a></div>
        @else
            <div><a href="{{ route($routes[$step]) }}" class="hover:text-florange-dark hover:underline">{{ __($step) }}</a></div>
        @endif

        <div>/</div>
    @endforeach
</div>
