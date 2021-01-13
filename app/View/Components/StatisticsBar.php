<?php

namespace App\View\Components;

use App\Models\Favorite;
use App\Models\Location;
use App\Models\Source;
use App\Models\Visit;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class StatisticsBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->statistics = [
            [
                'logo' => 'sources',
                'number' => number_format(Source::InTeam(Auth::User()->allTeams()->pluck('name')->toArray())->count(),0,",","."),
                'route' => 'data.sources'
            ],[
                'logo' => 'locations',
                'number' => number_format(Location::InTeam(Auth::User()->allTeams()->pluck('name')->toArray())->count(),0,",","."),
                'route' => 'data.locations'
            ],[
                'logo' => 'visits',
                'number' => number_format(Visit::InTeam(Auth::User()->allTeams()->pluck('name')->toArray())->count(),0,",","."),
                'route' => 'data.visits'
            ],[
                'logo' => 'favorites',
                'number' => number_format(Favorite::InTeam(Auth::User()->allTeams()->pluck('name')->toArray())->count(),0,",","."),
                'route' => 'data.favorites'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {
        return view('components.statistics-bar', [
            'statistics' => $this->statistics
        ]);
    }
}
