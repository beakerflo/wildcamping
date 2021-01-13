<select wire:model="team" {{ $attributes->merge(['class' => 'appearance-none px-1 border border-florange-dark rounded']) }}>
    <option>{{ Auth::User()->currentTeam->name }}</option>
    @foreach(Auth::user()->allTeams() as $team)
        @if ($team->id != Auth::User()->currentTeam->id )
            <option>{{ $team->name }}</option>
        @endif
    @endforeach
        <option>Public</option>
</select>

