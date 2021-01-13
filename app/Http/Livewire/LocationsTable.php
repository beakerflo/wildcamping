<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class LocationsTable extends Component {
    use WithPagination;

    public $search = '';
    public $record = '';
    public $type = '';
    public $source = '';
    public $team = '';
    public $paginate = 24;

    public function getRecordDetails($id) {
        $this->record = Location::with('type','favorite','sources','coordinate.address.country.flag','visits')->find($id)->withDmsFormat();
    }

    public function setTeam() {
        If ($this->team == '') {
            $this->team = Auth::User()->currentTeam->name;
        }
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render() {
        $this->setTeam();

        $Locations = Location::InTeam($this->team)
                        ->search($this->search)
                        ->OfType($this->type)
                        ->FromSource($this->source)
                        ->with('type','favorite','sources','coordinate.address.country.flag');

        return view('livewire.locations-table',[
            'RecordDetails' => $this->record,
            'Count' => number_format($Locations->count(),0,",","."),
            'Records' => $Locations->simplePaginate($this->paginate),
            'Team' => $this->team
        ]);
    }
}
