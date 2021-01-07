<select wire:model="source" class="appearance-none px-1 border border-florange-dark {{ $class}} rounded">
    <option value=''>{{ __('No filter') }}</option>
    @foreach($sources as $source)
        <option>{{ $source->name }}</option>
    @endforeach
</select>
