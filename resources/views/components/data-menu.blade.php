<div>
    <ul class="flex items-center justify-evenly md:justify-start px-8 mt-4 border-b md:space-x-4 PrimaryBorderColor">
        <x-data-menu-item name="Overview" route="pages.data">
            <x-svg-picker subject="overview" size=4 />
        </x-data-menu-item>

        <x-data-menu-item name="Sources" route="data.sources">
            <x-svg-picker subject="sources" size=4 />
        </x-data-menu-item>

        <x-data-menu-item name="Locations" route="data.locations">
            <x-svg-picker subject="locations" size=4 />
        </x-data-menu-item>

        <x-data-menu-item name="Visits" route="data.visits">
            <x-svg-picker subject="visits" size=4 />
        </x-data-menu-item>

        <x-data-menu-item name="Favorites" route="data.favorites">
            <x-svg-picker subject="favorites" size=4 />
        </x-data-menu-item>

        <x-data-menu-item name="Images" route="data.images">
            <x-svg-picker subject="images" size=4 />
        </x-data-menu-item>
    </ul>
</div>
