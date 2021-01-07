<ul class="flex items-center space-x-12 justify-evenly">
    <li class="text-floblue text-xs">&copy; 2020 <span class="text-floblack">Enter</span><span class="text-blue-700 italic">MI</span></li>
    @foreach($ItemsLeft as $item)
        <li><a href="{{ route($item['route']) }}" class="FooterText hover:underline">{{ __($item['name']) }}</a></li>
    @endforeach
    <x-logo />
    @foreach($ItemsRight as $item)
        <li><a href="{{ route($item['route']) }}" class="FooterText hover:underline">{{ __($item['name']) }}</a></li>
    @endforeach
