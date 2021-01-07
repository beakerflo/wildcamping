<?php

namespace App\Http\Livewire;

use App\Models\Location;
use App\Models\Source;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class LocationsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $type = '';
    public $source ='';
    public $record = '';
    public $paginate = 24;

    public function getRecordDetails($id) {
        $this->record = Location::with('type','favorite','sources','coordinate.address.country.flag','visits')->find($id);
    }

    public function render() {
        $Locations = Location::search($this->search)
                        ->OfType($this->type)
                        ->FromSource($this->source)
                        ->with('type','favorite','sources','coordinate.address.country.flag');

        return view('livewire.locations-table',[
            'RecordDetails' => $this->record,
            'RecordsCount' => number_format($Locations->count(),0,",","."),
            'Records' => $Locations->simplePaginate($this->paginate),
            'Sources' => Source::orderBy('name', 'asc')->get(),
            'Types' => Type::orderBy('name', 'asc')->get(),
        ]);
    }
}
