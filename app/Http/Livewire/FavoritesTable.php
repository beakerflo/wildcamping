<?php

namespace App\Http\Livewire;

use App\Models\Favorite;
use App\Models\Location;
use App\Models\Source;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class FavoritesTable extends Component
{
    use WithPagination;

    public $search = '';
    public $record = '';
    public $paginate = 24;

    public function getRecordDetails($id) {
        $this->record = Location::with('type','favorite','sources','coordinate.address.country.flag','visits')->find($id);
    }

    public function render() {
        $Favorites = Favorite::with('location','location.type','location.sources','location.coordinate.address.country.flag');

        return view('livewire.favorites-table', [
            'RecordDetails' => $this->record,
            'RecordsCount' => number_format($Favorites->count(),0,",","."),
            'Records' => $Favorites->simplePaginate($this->paginate),
            'Sources' => Source::orderBy('name', 'asc')->get(),
            'Types' => Type::orderBy('name', 'asc')->get(),
        ]);
    }
}
