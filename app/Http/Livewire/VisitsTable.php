<?php

namespace App\Http\Livewire;

use App\Models\Visit;
use Livewire\Component;
use Livewire\WithPagination;

class VisitsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $visit = '';
    public $paginate = 24;

    public function getLocationDetails($id) {
        $this->visit = Visit::with('locations', 'location.type','location.sources','location.coordinate.address.country.flag')->find($id);
    }

    public function render() {
        $Visits = Visit::with('locations', 'location.type','location.sources','location.coordinate.address.country.flag');
        return view('livewire.visits-table', [
            'RecordDetails' => $this->visit,
            'RecordsCount' => number_format($Visits->count(),0,",","."),
            'Records' => $Visits->simplePaginate($this->paginate),
        ]);
    }
}
