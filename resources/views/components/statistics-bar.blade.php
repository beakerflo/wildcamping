<div class="flex space-x-2 items-center shadow-inner">
    @foreach ($statistics as $stat)
    <div class="flex">

            <button class="border border-gray-300 rounded rounded-r-none px-3 py-1 text-xs">
                <a href="{{ route($stat['route']) }}"><x-svg-picker :subject="$stat['logo']" :size=4 /></a>
            </button>
            </a>
            <div class="border border-gray-300 rounded rounded-l-none border-l-0 px-3 py-1 text-xs">
                <a href="{{ route($stat['route']) }}" class="hover:font-semibold hover:text-florange-dark">{{ $stat['number'] }}</a>
            </div>
        </div>
    @endforeach
</div>
