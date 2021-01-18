<select wire:model="source" class="form-select mt-1 border border-florange-dark rounded {{ $class}}">
    <option value=''>{{ __('No filter') }}</option>
    @foreach($sources as $source)
        <option>{{ $source->name }}</option>
    @endforeach
</select>
