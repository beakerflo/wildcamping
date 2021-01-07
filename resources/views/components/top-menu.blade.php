<ul class="flex items-center space-x-4">
    @foreach ($items as $item)
        <li class="TopMenuItem hover:text-gray-300"><a href="{{ route($item['route']) }}">{{ __($item['name']) }}</a></li>
    @endforeach
</ul>
