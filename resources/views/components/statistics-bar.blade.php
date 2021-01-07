<div class="flex space-x-2 items-center shadow-inner">
    @foreach ($statistics as $stat)
        <div class="flex ">
            <button class="ButtonLeft">
                {!! $stat['logo'] !!}
            </button>
            <div class="ButtonRight">
                <a href="{{ route($stat['route']) }}" class="hover:font-semibold hover:text-florange-dark">{{ $stat['number'] }}</a>
            </div>
        </div>
    @endforeach
</div>
