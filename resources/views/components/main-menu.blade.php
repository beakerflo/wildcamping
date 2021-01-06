<div>
    <ul class="flex items-center px-8 mt-4 border-b space-x-4 PrimaryBorderColor">
        @foreach ($Items as $Item)
            <li class="TitleBarItem @if ($Item['route'] == $Active) TitleBarItemActive @endif space-x-2 hover:border-gray-400">
                {!! $Item['svg'] !!}
                <div><a href="{{ route($Item['route']) }}" class="hover:text-floblue">{{ $Item['name'] }}</a></div>
            </li>
        @endforeach
    </ul>
</div>
