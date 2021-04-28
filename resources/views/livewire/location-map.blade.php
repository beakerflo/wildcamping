<div class="container my-8 mx-auto mt-16 flex flex-col md:flex-row">
    <div class="w-full p-2">


        <x-table-search-bar class="w-28 md:w-36 h-8 text-xs" />
        <x-select-types class="text-xs w-28 h-8" />
        <x-select-sources class="text-xs w-28 h-8" :teams="$Team" />
        <x-select-teams class="text-xs w-28 h-8" />
        <style>
        <div id="mapid"></div>
        </style>
    </div>
</div>