<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class FavoritesTable extends Component {
    use WithPagination;

    public $search = '';
    public $record = '';
    public $paginate = 24;
    public $type = '';
    public $team = '';
    public $source = '';

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

        $Favorites = Location::search($this->search)
                        ->InTeam($this->team)
                        ->Favorites()
                        ->OfType($this->type)
                        ->FromSource($this->source)
                        ->with('type','favorite','sources','coordinate.address.country.flag');

        return view('livewire.favorites-table', [
            'RecordDetails' => $this->record,
            'Count' => number_format($Favorites->count(),0,",","."),
            'Records' => $Favorites->simplePaginate($this->paginate)
        ]);
    }
}
