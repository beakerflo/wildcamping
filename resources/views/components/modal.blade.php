@props(['id' => null, 'maxWidth' => '5xl'])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 bg-flowhite text-floblue-dark space-y-2 md:space-y-4">
        <div class="px-6 py-1 md:py-4 mb-1 text-lg font-semibold text-florange">
            {{ $title }}
        </div>

        <div class="px-6 mt-4 space-x-4 overflow-y-auto">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 bg-gray-200 text-right">
        {{ $footer }}
    </div>
</x-jet-modal>
