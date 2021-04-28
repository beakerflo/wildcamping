<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;

class LocationMap extends Component
{
    public $team = '';

    /**
     * Set variable Team to current team
     *
     * @return void
     */
    public function setTeam() {
        If ($this->team == '') {
            $this->team = Auth::User()->currentTeam->name;
        }
    }

    public function render() {
        $this->setTeam();

        $Locations = Location::InTeam($this->team)
                        ->with('type','favorite','sources','coordinate.address.country.flag');

        return view('livewire.location-map',[
            'Count' => number_format($Locations->count(),0,",","."),
            'Records' => $Locations,
            'Team' => $this->team
        ]);
        
        return view('livewire.location-map');
    }
}
