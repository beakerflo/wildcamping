<select wire:model="type" class="appearance-none px-1 border border-florange-dark {{ $class }} rounded">
    <option value=''>{{ __('No filter') }}</option>
    @foreach($types as $type)
        <option>{{ $type->name }}</option>
    @endforeach
</select>
