<?php

namespace App\Http\Livewire;

use App\Models\Favorite;
use App\Models\Location;
use App\Models\Source;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class FavoritesTable extends Component {
    use WithPagination;

    public $search = '';
    public $record = '';
    public $paginate = 24;
    public $type = '';
    public $source = '';

    public function getRecordDetails($id) {
        $this->record = Location::with('type','favorite','sources','coordinate.address.country.flag','visits')->find($id)->withDmsFormat();
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render() {
        $Favorites = Location::search($this->search)
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
