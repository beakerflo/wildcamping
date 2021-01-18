<div>
    @if(empty($recordId))
        <button wire:click="createRecord" class="mt-2"><x-svg-picker subject="plus" size=6 /></button>
    @else
        <button wire:click="editRecord" class="mt-2"><x-svg-picker subject="edit" size=5 /></button>
    @endif

    @if($isVisible)
        <x-modal>
            <x-slot name="title">
                @if(empty($recordId))
                    {{ __('Create a new location') }}
                @else
                    {{ __('Edit an existing location') }}
                @endif
            </x-slot>

            <x-slot name="content">

                <x-form submit="save" title="titel" class="my-6">
                    <div class="space-y-2 py-4">

                        <div class="flex flex-col md:flex-row items-center justify-items-start space-y-2 md:space-y-0">
                            <div class="w-full md:w-2/12">
                                <x-form-label class="w-24">{{ __('Name') }}:</x-form-label>
                            </div>
                            <div class="flex w-full md:w-10/12 justify-between">
                                <x-form-input placeholder="{{ __('Type the name') }}" class="w-48 md:w-96" wire:model.debounce.300ms="location.name" id="name" />
                                <div class="space-x-2">
                                    <button title="{{ __('Toggle visibility for just you or others') }}"><x-svg-picker subject="eyePrivate" size=8 /></button>
                                    <button><x-svg-picker subject="heart" size=8 /></button>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-items-start space-y-2 md:space-y-0">
                            <div class="w-full md:w-2/12">
                                <x-form-label class="w-24">{{ __('Description') }}:</x-form-label>
                            </div>
                            <div class="w-full md:w-10/12">
                                <x-form-input placeholder="{{ __('Type the description') }}" class="w-full" wire:model.debounce.300ms="location.description" id="description" />
                            </div>
                        </div>

                        <div class="flex items-start space-x-2 md:space-x-6 space-y-1 md:space-y-0">
                            <div class="w-1/2">

                                <div class="flex flex-col md:flex-row items-start justify-items-start space-y-2 md:space-y-0">
                                    <div class="w-full md:w-4/12">
                                        <x-form-label class="w-24">{{ __('Type') }}:</x-form-label>
                                    </div>
                                    <div class="w-full md:w-8/12">
                                        <select wire:model="location.type_id" class="form-select mt-1 w-48 md:w-full border border-gray-300 rounded">
                                            @if ($location->type)
                                                <option value="{{ $location->type->id }}">{{ $location->type->name}}</option>
                                            @else
                                                <option value="x">{{ __('Choose type') }}</option>
                                            @endif
                                            @foreach ($types as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="w-1/2">

                                <div class="flex flex-col md:flex-row items-start justify-items-start space-y-2 md:space-y-0">
                                    <div class="w-full md:w-2/12">
                                        <x-form-label class="w-24">{{ __('Source') }}:</x-form-label>
                                    </div>
                                    <div class="w-full md:w-10/12">
                                        <select wire:model="source_name" class="form-select mt-1 w-48 md:w-full border border-gray-300 rounded">
                                            @if ($location->id)
                                                <option value="{{ $location->sources[0]->name }}">{{ $location->sources[0]->name}}</option>
                                            @else
                                                <option value="x">{{ __('Choose type') }}</option>
                                            @endif
                                            @foreach ($sources as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="flex flex-col md:flex-row items-center justify-items-start space-y-2 md:space-y-0">
                            <div class="w-full md:w-2/12">
                                <x-form-label class="w-24">{{ __('Coordinates') }}:</x-form-label>
                            </div>
                            <div class="w-full md:w-10/12 flex space-x-4 items-center">
                                <x-form-input placeholder="{{ __('lat') }}" class="w-24" wire:model.debounce.300ms="latitude" id="latitude" />
                                <x-form-input placeholder="{{ __('lng') }}" class="w-24" wire:model.debounce.300ms="longitude" id="longitude" />
                                @if ($location->coordinate)<div class="xs">{{ $location->coordinate->address->getAddressString() }}</div>@endif
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-items-start space-y-2 md:space-y-0">
                            <div class="w-full md:w-2/12">
                                <x-form-label class="w-24">{{ __('Tags') }}:</x-form-label>
                            </div>
                            <div class="w-full md:w-10/12">
                                <x-form-input placeholder="{{ __('Fill in the tags seperated with comma') }}" class="w-full" wire:model.debounce.300ms="tags" id="tags" />
                            </div>
                        </div>
                        <div class="flex items-center justify-items-start space-y-2 md:space-y-0">
                            <div class="w-full md:w-2/12"><x-form-label class="w-24">{{ __('Files') }}:</x-form-label></div>
                            <div class="w-full md:w-10/12 items-center"><input type="file" multiple wire:model="imageFiles" class="w-full items-center"></div>
                        </div>
                    </div>
                </x-form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="toggle" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>
                <x-jet-button wire:click="saveComponent" wire:loading.attr="disabled" class="bg-red-500">
                    {{ __('Save') }}
                </x-jet-button>
            </x-slot>

        </x-modal>
    @endif
</div>
