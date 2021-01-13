<div>
    @if($loggedOn)
        <a href="javascript:void(0);" wire:click="toggle">
            <img src="{{ $user->profile_photo_url }}" class="rounded-full w-8 h-8" alt="{{ $user->name }}">
        </a>

        @if($isVisible)
            <div class="bg-gray-100 text-floblue-dark" >
                <div class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-10">
                    <div class="rounded-md shadow-xs py-1 bg-flowhite">
                            <div class="block px-4 py-2 italic text-floblue">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-300"></div>

                            <!-- Team Management -->
                            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                <div class="block px-4 py-2 italic text-floblue">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', $user->currentTeam->id) }}">
                                    {{ __('Team Settings') }}
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                        {{ __('Create New Team') }}
                                    </x-jet-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-300"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 italic text-floblue">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach ($user->allTeams() as $team)
                                    <x-jet-switchable-team :team="$team" />
                                @endforeach

                                <div class="border-t border-gray-300"></div>
                            @endif

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                    </div>
                </div>
            </div>
        @endif
    @else
    <a href="javascript:void(0);" wire:click="toggle">
        <x-svg-picker subject="profile" size=7 />
    </a>
        @if($isVisible)
            <div class="bg-gray-100 text-floblue-dark" >
                <div class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-10">
                    <div class="rounded-md shadow-xs py-1 bg-flowhite">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </div>
                </div>
            </div>
        @endif
    @endif

</div>
