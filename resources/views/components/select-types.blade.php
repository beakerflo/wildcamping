<select wire:model="type" class="form-select mt-1 border border-florange-dark rounded {{ $class }}">
    <option value=''>{{ __('No filter') }}</option>
    @foreach($types as $type)
        <option>{{ $type->name }}</option>
    @endforeach
</select>
