<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class LocationsTable extends Component {
    use WithPagination;

    public $isVisible = False;
    public $search = '';
    public $record = '';
    public $type = '';
    public $source = '';
    public $team = '';
    public $paginate = 24;

    /**
     * Get details of one Record for edit or viewing
     *
     * @param  mixed $id
     * @return void
     */
    public function getRecordDetails($id) {
        $this->record = Location::with('type','favorite','sources','coordinate','coordinate.maps','coordinate.what3words','coordinate.address.country.flag','visits')->find($id)->withDmsFormat();
        $this->emit('newLocationId', $this->record->id);
    }

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

    /**
     * Reset the table when updating Search
     *
     * @return void
     */
    public function updatingSearch() {
        $this->resetPage();
    }

    /**
     * Toggle the property to show or hide Modal
     *
     * @return void
     */
    public function toggle() {
        $this->isVisible = !$this->isVisible;
    }

    /**
     * Render the component
     *
     * @return void
     */
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
